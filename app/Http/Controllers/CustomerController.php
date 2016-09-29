<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
	 public function __construct(){
        $this->middleware('auth:customer');
     }
     public function index(Request $request){
     	// if(session()->get(''))
     	// {
     	$customer = Auth::guard('customer')->user();
    	return view('customer.home',['customer'=>$customer]);
        // }
    	// dd('后台首页，当前用户名：'.auth('customer')->user()->name);
    }
}
