<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class CustomerController extends Controller
{
	private $range = array('A','B','C'); 
	   public function __construct(){
         $this->middleware('auth.customer:customer');
     }
     // 用户主页
     public function index(Request $request){
     	$customer = Auth::guard('customer')->user();
     	
     	  return view('customer.index',['customer'=>$customer]);
       
    }
    // 用户中心
     public function customerCenter(request $request){
        $customer = Auth::guard('customer')->user();
        return view('customer.center',['customer'=>$customer]);
    }
    // 消息中心
    public function infoCenter(){    
        $customer = Auth::guard('customer')->user(); 
           return view('info.infoCenter',[
               'customer'=>$customer,
            ]);
        // $customer->notifications是一个DatabaseNotificationCollection对象
    }
    // 等级功能
    public function forHighLevel(request $request){
    	if (Gate::allows('userLevel',$this->range)){
          return '级别>D用户的专属功能';
       }
    }
}
