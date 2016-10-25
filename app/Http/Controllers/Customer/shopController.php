<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\product;
class shopController extends Controller
{
    public function __construct(){
      $this->middleware('auth.customer:customer');
    }
    public function showShopCart(request $request){
           return view('customer.shoppingCart');
    }
    public function checkOut(request $request){
           return view('customer.checkOut');
    }
    public function indexShopCart(){
      $allItem=\shoppingCart::all();
      return view('shoppingCart.shoppingCartList',['allItem'=>$allItem]);
    }
    // 后期再更新为用观察者模式
    public function addToShopCart($id){
          \shoppingCart::add($id);
          // $product=product::find($id);
          // $product->proNum--;
          // $product->save();
          $allItem=\shoppingCart::all();
          return view('shoppingCart.shoppingCartList',['allItem'=>$allItem]);
    }
    public function removeFromShopCart($id){
          $number=\shoppingCart::delete($id);
          // $product=product::find($id);
          // $product->proNum+=$number;
          // $product->save();
          $allItem=\shoppingCart::all();
          return view('shoppingCart.shoppingCartList',['allItem'=>$allItem]);
    }
    public function cutFromShopCart($id){
             \shoppingCart::cut($id);
            //  $product=product::find($id);
            //  $product->proNum++;
            //  $product->save();
             $allItem=\shoppingCart::all();
             return view('shoppingCart.shoppingCartList',['allItem'=>$allItem]);
    }

}
