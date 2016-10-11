<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
	 public function __construct(){
        $this->middleware('auth:customer');
     }
     public function index(Request $request){
     	if(session()->get(''))
    	return view('customer.home');
    	// dd('后台首页，当前用户名：'.auth('customer')->user()->name);
    }
}
