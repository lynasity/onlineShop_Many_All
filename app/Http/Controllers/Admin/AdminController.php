<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
