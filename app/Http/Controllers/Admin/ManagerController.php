<?php

 namespace App\Http\Controllers\Admin;

 use Illuminate\Http\Request;

 use App\Http\Requests;
 use App\Http\Controllers\Controller;
 use App\customer;
 use App\product;

 class ManagerController extends Controller
 {
// 商品管理
   public function productManagerCenter(){
        $products=product::all();
   	    return view('product.productCenter',[
            'products'=>$products,
   	    	]);
   }
   // 信息管理
   public function messageManagerCenter(){
   	 
   	   return view('admin.messageCenter');
   }
   // 品类管理
   public function cateCenter(){
      return view('cate.cateCenter');
   }
   // 订单管理
   public function orderFormCenter(){
      return view('orderForm.orderFormCenter');
   }
 }
