<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\cate;
use App\Http\Requests\addProductRuequest;
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
    public function store(addProductRuequest $request)
    {
        $product=new product();
        $product->proName=$request->input('proName');
        $product->proSn=$request->input('proSn');
        $product->proNum=$request->input('proNum');
        $product->marketPrice=$request->input('marketPrice');
        $product->webPrice=$request->input('webPrice');
        $product->proDescription=$request->input('proDescription');
        $product->proImg=$request->input('proImg');
        $product->cateId=$request->input('cateId');
        $product->isShow=$request->input('isShow');
        $product->isHot=$request->input('isHot');
        $product->save();
        return redirect()->route('products.index');
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
        $product=product::find($id);
        $cates=cate::all();
        return view('product.editForm',['product'=>$product,'cates'=>$cates]);
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
        product::where('id',$id)->update(['proName'=>$request->input('proName'),
        'proSn'=>$request->input('proSn'),
        'proNum'=>$request->input('proNum'),
        'marketPrice'=>$request->input('marketPrice'),
        'webPrice'=>$request->input('webPrice'),
        'proDescription'=>$request->input('proDescription'),
        'proImg'=>$request->input('proImg'),
        'cateId'=>$request->input('cateId'),
        'isShow'=>$request->input('isShow'),
        'isHot'=>$request->input('isHot')]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
  
}
