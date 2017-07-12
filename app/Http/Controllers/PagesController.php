<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  //Front page of the app title
    public function index(){
      $title = 'Designer Resources';
      //return view('pages.index', compact('title'));
      return view('pages.index')->with('title', $title);
    }
//About page of the app title
    public function about(){
          $title = 'About Designer Resources';
          return view('pages.about')->with('title', $title);
    }
//Contact page for the app title
    public function contact(){
      $title = 'Contact';
      return view('pages.contact')->with('title', $title);
    }
}
