<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\cate;
use Illuminate\Support\Facades\Auth;

class cateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // 因为品类是相对稳定的数据，所以这里考虑进行缓存
     private $cates;
     // 根节点
     private static $root;
     public function __construct()
    {
        //如果控制器里的所有方法都需要登录才能执行，需要添加中间件
        //中间件完成的任务是：验证是否登录，然后返回该用户,Auth::user()才有返回值
      //  $this->middleware('auth.admin:admin');
    }
    public function index()
    {
        // return 'ok';
        // 输出除根节点外的cate实例
        $this->cates=cate::where('lft','>',1)->get();
        return view('cate.cateList',['cates'=>$this->cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(Auth::user()->can('create',cate::class)){
           $root=cate::root();
            if(!$root){
                $root=cate::create(['cName'=>'root']);
            }
             $cates=($root->children()->get());
              return view('cate.cateForm',['cates'=>$cates]);
    //    }else{
        //    return redirect()->route('cateCenter');
    //    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->input('isNew')==1){
          //注意:where->get返回的是结果集,不可以直接调用children方法
            // $root=cate::where('cName','root')->first();
            $root=cate::root();
            if(is_null($root)){
                $root=cate::create(['cName'=>'root']);
            }

            $root->children()->create(['cName' =>$request->input('cName')]);
        }else{
            // 如果有选择父类
            if($request->input('parentCate')){
               $parent=cate::find($request->input('parentCate'));
               $parent->children()->create(['cName' =>$request->input('cName')]);
            }
        }
         $this->cates=cate::where('lft','>',1)->paginate(7);
        return view('cate.cateList',['cates'=>$this->cates]);
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
        $cate=cate::find($id);
        return view('cate.editForm',['cate'=>$cate]);
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
    //调用控制器中的authorize方法进行权限判断，如果判断错误判处错误和提示
        // $this->authorize('update', new cate());
    //也可以通过Auth::user()->can('update',new cate())进行判断，自己对判断结果进行处理

    if(Auth::user()->can('update',new cate())){
        cate::where('id',$id)->update(['cName'=>$request->input('cName')]);
        return redirect()->route('cates.index');
      }else{
          return redirect()->route('cates.index');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->can('delete',new cate())){
        $cate=cate::find($id);
        $cate->delete();
      }
        return redirect()->back();
   }
   // 查询某个子类下的全部子类
   // public function querySubCate(){

   // }
}
