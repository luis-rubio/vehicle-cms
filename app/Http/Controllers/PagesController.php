<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = '2090 Auto';
      return view('welcome')->with('title', $title);
    }
}
