<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller {
	public function __construct() {

	}

	public function index() {
		$products = Product::paginate(6);
		$categories = Category::all();

		return view('client/shop', compact('products', 'categories'));
	}

	public function category($category) {

		$product_category = Category::findOrFail($category);
		$products = $product_category->products()->paginate(4);
		$categories = Category::all();
		return view('client/shop', compact('products', 'categories'));
	}

	public function show($id) {
		$product = Product::find($id);
		$products = Product::inRandomOrder(6)->get();
		return view('client/single-product', compact('product', 'products'));
	}

	public function searchFullText(Request $request) {
		if ($request->search != '') {
			$data = Product::FullTextSearch('name', $request->search)->get();
			return view('client/search-result', compact('data'));
		}
	}
}
