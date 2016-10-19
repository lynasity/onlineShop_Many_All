<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use TomLingham\Searchy\Facades\Searchy;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\cate;
class searchController extends Controller
{
   public function search(request $request){
      $products = Searchy::products('proName','proDescription')->query($request->input('content'))->having('relevance', '>', 20)->get();
      // dd($products);
     exit;
      // $cate =cate::search('家用电器')->get();
      // dd($cate);
      // exit;
  }
}
