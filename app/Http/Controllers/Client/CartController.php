<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\HistoryOrder;
use Cart;
use Auth;
use DB;
use Mail;
use App\Models\Site;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Mail\MailNotify;
class CartController extends Controller
{
  public function index()
  {
   return view('client/cart');
}

public function addCart($id,$qty)
{
   $product = Product::find($id);
   $data = [
      'id' => $product->id,
      'name' => $product->name,
      'qty' => $qty,
      'price' => $product->price,
      'weight' => 0,
      'options'=> [
         'image' => $product->image
      ],
   ];
   Cart::add($data);
   // return array(Cart::content());
   dd(Cart::content());
   return redirect()->back()->with('success', 'Thêm vào giỏ hàng thành công');   
}

public function destroyCart()
{
   Cart::destroy();
   return redirect()->back();
}

public function updateQty(Request $request)
{
   $rowId = $request->rowId;
   $qty = $request->qty;
   Cart::update($rowId,$qty);
   return redirect()->back();
}


public function removeProduct($rowId)
{

   Cart::remove($rowId);
   return redirect()->back();
}

public function checkout()
{
   if(Auth::check()){
      $user = Auth::user();
   }
      $bill = Bill::insertGetId([
        'user_id' => $user->id,
        'subtotal' => Cart::subtotal(),
        'created_at' => date("Y-m-d h:i:s"),
        'updated_at' => date("Y-m-d h:i:s"),
     ]);

      foreach(Cart::content() as $item){
         BillDetail::create([
            'product_id' => $item->id,
            'quantity' => $item->qty,
            'bill_id' => $bill,
         ]);

      }

      Mail::to($user->email)->send(new MailNotify($user,Cart::content(),Cart::subTotal()));

      Cart::destroy();
      return redirect()->back()->with('messenge', 'Đặt hàng thành công'); 

}

public function history()
{
   // code...
   $a = HistoryOrder::where('customer_id',Auth::id())->get();
   dd($a);
}

}
