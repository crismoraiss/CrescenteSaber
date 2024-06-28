<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function blogum(){
        return view('site.blog.blogum');
    }

    public function blogdois(){
        return view('site.blog.blogdois');
    }

    public function blogtres(){
        return view('site.blog.blogtres');
    }

    public function blogquatro(){
        return view('site.blog.blogquatro');
    }
}
