<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Blog;

class HomeController extends Controller
{

   public function __construct()
   {

   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::inRandomOrder()->limit(8)->get();
       $blogs = Blog::limit(3)->get();
       return view('client/index',compact('products','blogs'));
      
    }


 }
