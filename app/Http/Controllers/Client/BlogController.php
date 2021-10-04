<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
class BlogController extends Controller
{
    //
   public function index()
   {
    $blogs = Blog::paginate(6);
    return view('client/review-book',compact('blogs'));
}

public function show($id)
{
    $blog = Blog::find($id);
        // code...
    return view('client/blog-post',compact('blog'));
}
}
