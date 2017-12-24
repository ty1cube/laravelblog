<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\post;

class BlogController extends Controller
{
  protected $limit = 4;
    public function index()
    {
         $posts = Post::with('author')->latestFirst()->paginate($this->limit);

         return view ("blog.index", compact('posts'));
    }
}
