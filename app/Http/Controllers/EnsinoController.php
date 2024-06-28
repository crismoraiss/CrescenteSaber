<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnsinoController extends Controller
{
  public function maternal(){
    return view('site.ensino.maternal');
  }

  public function jardim(){
    return view('site.ensino.jardim');
  }

}
