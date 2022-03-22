<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
     public function index()
    {
        return view('client/contact',['site'=> Site::first()]);
    }
}
