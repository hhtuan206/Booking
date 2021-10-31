<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Blog;
use App\Models\User;
class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::paginate(6);
        return view('client/blog-book',compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        // code...
        return view('client.blog-post',compact('blog'));
    }

    public function create()
    {
        return view('client.create-blog');
    }

    public function store(Request $request)
    {
        if(Auth::check()){
          $user = Auth::user();
        }
        $path = $request->file('image')->store('images', 'admin');
        // dd($request);
        Blog::create([
            'title' => $request->title,
            'author' => $user->id,
            'content' => $request->content,
            'image' => $path,
        ]);
      return redirect()->route('blog.index')->with('success', 'Đăng bài viết thành công');
    }

    public function read($id)
    {
        $blog = Blog::findOrFail($id);
        return view('client.blog-detail',compact('blog'));
    }

    public function getBlogByUser($id)
    {
        $user = User::findOrFail($id);
        $blogs = $user->blogs()->paginate(6);
        return view('client.blog-book',compact('blogs'));
    }
}
