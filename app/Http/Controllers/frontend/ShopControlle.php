<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopControlle extends Controller
{
    //
    function index(){
        return view('shop');
    }
}
