<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class shopController extends Controller
{
    public function showShopCart(request $request){
           return view('customer.shoppingCart');
    
    }
    public function checkOut(request $request){
           return view('customer.checkOut');
    }
}
