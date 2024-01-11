<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public static $blog;
    public function index()
    {
        return view('blog.add');
    }

    public function saveBlog(Request $request)
    {
//        Eloquent_ORM_
//        Query_builder_
//        return $request->file('image');
        Blog::createBlog($request);
        return redirect(route('blog.manage'));
//        return back();

    }

    public function manageBlog()
    {
        return view('blog.manage',[
             'blogs' => Blog::all()
        ]);
    }

    public function editBlog($id)
    {
        return view('blog.edit',[
            'blog' => Blog::find($id)
        ]);
//        return view('blog.manage',[
//            'blogs' => Blog::where('id',$id)->first()
//        ]);
    }
    public function updateBlog(Request $request)
    {
//        return $request;
        Blog::updateBlog($request);
        return redirect(route('blog.manage'))->with('message','info update successfully');
    }
    public function deleteBlog(Request $request)
    {
        Blog::deleteBlog($request->id);
        return redirect(route('blog.manage'))->with('message','info deleted');
    }
}
