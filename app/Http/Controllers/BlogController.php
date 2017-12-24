<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\post;

class BlogController extends Controller
{
    public function index()
    {
         $posts = Post::all();

         return view ("blog.index", compact('posts'));
    }
}
