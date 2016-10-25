<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class orderFormController extends Controller
{
   public function __construct(){
     $this->middleware('auth.admin:admin');
   }
    public function index(){
      $allItem=\shoppingCart::all();
      return view('order.orderIndex',['allItem'=>$allItem]);
    }
}
