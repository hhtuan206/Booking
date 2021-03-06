<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\MailNotify;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\HistoryOrder;
use App\Models\Product;
use App\Models\User;
use App\Events\SendMailEvent;
use Auth;
use Cart;
use Illuminate\Http\Request;
use Mail;

class CartController extends Controller
{
    public function index()
    {
        return view('client/cart');
    }

    public function addCart($id, $qty)
    {
        $product = Product::findOrFail($id);
//        if ($qty < $product->quantity) {
        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $qty,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'image' => $product->image,
            ],
        ];
        Cart::add($data);
        return redirect()->back()->with('success', 'Thêm thành công');
//        }
        return redirect()->back()->with('fail', 'Thêm thất bại');

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
        $product = Product::find(Cart::get($rowId))->first();
        Cart::update($rowId, $qty);
        return redirect()->back()->with('success', 'Cập nhật thành công');

    }

    public function removeProduct($rowId)
    {

        Cart::remove($rowId);
        return redirect()->back();
    }

    public function checkout()
    {
        if (Auth::check()) {
            $user = Auth::user();
        }
        try {
            $bill = Bill::insertGetId([
                'user_id' => $user->id,
                'subtotal' => Cart::subtotal(),
                'shipment' => "COD",
                'status' => "Đang chờ",
                'created_at' => date("Y-m-d h:i:s"),
                'updated_at' => date("Y-m-d h:i:s"),
            ]);

            foreach (Cart::content() as $item) {
                BillDetail::create([
                    'product_id' => $item->id,
                    'quantity' => $item->qty,
                    'bill_id' => $bill,
                ]);

            }

            event(new SendMailEvent($user,Cart::content(),Cart::subtotal()));
            Cart::destroy();
        } catch (Exception $e) {
            return redirect()->back()->with('Message', 'Đặt hàng thất bại');
        }
        return redirect()->back()->with('Message', 'Đặt hàng thành công');

    }

    public function history()
    {
        // code...
        $a = HistoryOrder::where('customer_id', Auth::id())->get();
        dd($a);
    }

}
