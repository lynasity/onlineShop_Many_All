<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\cate;
use App\Http\Requests\productValidator;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        //如果控制器里的所有方法都需要登录才能执行，需要添加中间件
        //中间件完成的任务是：验证是否登录，然后返回该用户,Auth::user()才有返回值
       $this->middleware('auth.admin:admin');
    }
    public function index()
    {
        $products=product::all();
        return view('product.productList',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cates=cate::all();
         return view('product.productForm',['cates'=>$cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productValidator $request)
    {
        $product=new product();
        $product->proName=$productValidator->input('proName');
        $product->proSn=$productValidator->input('proSn');
        $product->proNum=$productValidator->input('proNum');
        $product->marketPrice=$productValidator->input('marketPrice');
        $product->webPrice=$productValidator->input('webPrice');
        $product->proDescription=$productValidator->input('proDescription');
        $product->proImg=$productValidator->input('proImg');
        $product->cateId=$productValidator->input('cateId');
        $product->isShow=$productValidator->input('isShow');
        $product->isHot=$productValidator->input('isHot');
        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
  
}
