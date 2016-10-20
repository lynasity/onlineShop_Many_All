<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\customer;
use Illuminate\Support\Facades\Notification;
use App\Notifications\salePromotion;
use Illuminate\Support\Facades\Auth;
use App\cate;
class AdminController extends Controller
{
     public function __construct()
    {
    //    $this->middleware('auth.admin:admin');
    }
    public function index(){
    	return view('admin.home');
    }
}
