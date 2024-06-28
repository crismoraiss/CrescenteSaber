<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaternalController extends Controller
{
    public function index(){
        return view('site.maternal');
    }
}
