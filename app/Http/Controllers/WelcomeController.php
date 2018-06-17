<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class WelcomeController extends Controller
{

      public function welcome()
      {

        $posts = Post::latest()->take(4)->get();

        return view('welcome', compact('posts'));
      }


}
