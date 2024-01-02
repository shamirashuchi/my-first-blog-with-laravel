<?php

namespace App\Http\Controllers;

use App\Models\Blog;
//namespace
use Illuminate\Http\Request;

class homeController extends Controller
{
    public $blogs, $blog , $fullName , $i, $fullseries;
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        $this->blogs = Blog::getAllBlogs();
        return view('about',['blogs' => $this->blogs]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function series()
    {
        return view('series');
    }
    public function detail($id)
    {
        $this->blog = Blog::getBlogById(($id));
        return view('detail',['blog' => $this->blog]);
    }
    //Request holo class r request holo object
    public function makeFullName(Request $request)
    {
//        echo '<pre>';
//        print_r($_POST);
        $this->fullName = $request->first_name.' '.$request->last_name;
        return redirect('/contact')->with('message',$this->fullName);
//        return $request;
    }
    public function makefullseries(Request $request)
    {
//        echo '<pre>';
//        print_r($_POST);
        if($request->first_number & $request->last_number){
            if($request->first_number < $request->last_number) {
                for ($i = $request->first_number; $i <= $request->last_number; $i++) {
                    $this->fullseries .= $i;
                }
                return redirect('/series')->with('message', $this->fullseries);
            }
            else if($request->first_number > $request->last_number){
                for ($i = $request->first_number; $i >= $request->last_number; $i--) {
                    $this->fullseries .= $i;
                }
                return redirect('/series')->with('message', $this->fullseries);
            }

        }
    }
    }
