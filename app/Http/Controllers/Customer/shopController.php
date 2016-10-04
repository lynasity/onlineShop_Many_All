<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function customerCenter(request $request){
        $customer = Auth::guard('customer')->user();
        return view('customer.center',['customer'=>$customer]);
    }
    public function messageCenter(){
        $customer = Auth::guard('customer')->user();
        dd($customer->notifications);
    }
}
