<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function index(){
    	return view('admin.home');
    	// dd('后台首页，当前用户名：'.auth('customer')->user()->name);
    }
}
