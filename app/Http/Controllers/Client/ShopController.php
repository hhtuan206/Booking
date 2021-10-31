<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CustomerOrder;
use App\Models\HistoryOrder;
use App\Models\Category;
use App\Mail\MailNotify;
use Cart;
use DB;
use Mail;
use Auth;

class ShopController extends Controller
{
   public function __construct()
   {
      
   }

   public function index()
   {
      $products = Product::paginate(4);
      $categories = Category::all();

      return view('client/shop',compact('products','categories'));
   }

   public function category($category)
   {
     
      $product_category = Category::findOrFail($category);
      $products = $product_category->products()->paginate(4);
      $categories = Category::all();
      return view('client/shop',compact('products','categories'));
   }


   public function show($id)
   {
      $product = Product::find($id);
      $products = Product::inRandomOrder(6)->get();
      return view('client/single-product',compact('product','products'));
   }

   public function searchFullText(Request $request)
   {
      if ($request->search != '') {
        $data = Product::FullTextSearch('name', $request->search)->get();
        return view('client/search-result',compact('data'));
     }
  }
}
