<?php

 namespace App\Http\Controllers\Admin;

 use Illuminate\Http\Request;

 use App\Http\Requests;
 use App\Http\Controllers\Controller;
 use App\customer;
 use App\product;


 class ManagerController extends Controller
 {

   public function productManagerCenter(){
        $products=product::all();
   	    return view('product.productCenter',[
            'products'=>$products,
   	    	]);
   }
   public function messageManagerCenter(){
   	 
   	   return view('admin.messageCenter');
   }
 }
