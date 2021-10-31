<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Bill;
use App\Models\User;
use App\Models\BillDetail;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('client\my-account',compact('user'));
    }

    public function update(Request $request)
    {
        try{
            $user = Auth::user();
            if($request->has('password')){
                $user->password = bcrypt($request->input('password'));
            }
            $user->address = $request->address;
            $user->phone =  $request->phone;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->sex = $request->sex;
            $user->save();
            
            return redirect()->route('profile.index')->with("Message","Update success");
        }catch(Exception $e){
            return redirect()->route('profile.index')->with("Message","Update failed");
        }
    }
    public function history()
    {
        $bills = Bill::where('user_id',Auth::id())->get();
        return view('client.history-order',compact('bills'));
}
}


