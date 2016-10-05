<?php

namespace App\Http\Controllers\Customer;
use App\customer as selectCustomer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class infoController extends Controller
{
    public function allInfo(request $request,selectCustomer $customer){
         return view('info.allInfo',['customer'=>$customer]);
    }
    public function unreadInfo(request $request,selectCustomer $customer){
        return view('info.unreadInfo',['customer'=>$customer]);
    }
    public function deleteInfor(request $request,selectCustomer $customer){
    	$customer->notifications()->delete();
    	redirect()->route('infoCenter');
    }
}
