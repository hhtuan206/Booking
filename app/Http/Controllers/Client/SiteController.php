<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;

class SiteController extends Controller
{
    //
    public function index()
    {
        $site = Site::first();
        $site = json_decode($site);
        dd($site->content->Phone);
        

    }
}
