<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JardimController extends Controller
{
    public function index(){
        return view('site.jardim');
    }
}
