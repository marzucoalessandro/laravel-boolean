<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;


class myController extends Controller
{
  public function home(){
    return view('home');
  }

  public function about(){
    return view('about');
  }

  public function blog(){
    // dd(Post::all());
    $post = Post::all();
    return view('blog', compact('post'));
  }
}
