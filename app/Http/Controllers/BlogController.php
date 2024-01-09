<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.add');
    }

    public function saveBlog(Request $request)
    {
//        Eloquent_ORM_
//        Query_builder_

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
}
