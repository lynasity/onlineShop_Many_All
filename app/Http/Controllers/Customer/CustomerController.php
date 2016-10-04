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
         $this->middleware('auth:customer');
     }
     public function index(Request $request){
     	$customer = Auth::guard('customer')->user();
     	
     	  return view('customer.index',['customer'=>$customer]);
       
    }
     public function customerCenter(request $request){
        $customer = Auth::guard('customer')->user();
        return view('customer.center',['customer'=>$customer]);
    }
    public function messageCenter(){
        $customer = Auth::guard('customer')->user();
        dd($customer->notifications);
    }
    public function forHighLevel(request $request){
    	if (Gate::allows('userLevel',$this->range)){
          return '级别>D用户的专属功能';
       }
    }
}
