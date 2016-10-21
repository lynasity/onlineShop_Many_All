<?php
namespace App\MyExtensions\shoppingCart\Executors;
use App\MyExtensions\shoppingCart\contracts\shoppingCart as cartInterface;
use Illuminate\Support\Facades\Auth;
use App\product;
// 方便日后更改购物车
abstract class baseCart implements cartInterface{
     private $model;
     private static $customerId;
    //  private $facade;
    public function __construct(){
      $this->model=$this->getModel();
    }
    //  public function instance(){
    //   //  得到模型名
    //    $$this->model=$this->getModel();
    //   //  $this->model=new ($this->facade)();
    //      //将当前创造购物车的用户与购物车关联
    //    return $this;
    //  }
     /**
      * [add description]
      * @param [App\product] $product [description]
      */
     public function add($id){
      //  如果当前用户未添加该商品
          $product =product::find($id);
          $customerId=Auth::user()->id;
         $record=($this->model)::where(['customer_Id'=>($customerId),'pro_Id'=>$id])->first();
       if(!$record){
                $model=$this->model;
                $newRecord=new $model();
                $newRecord->customer_Id=$customerId;
                $newRecord->pro_Id=$id;
                $newRecord->itemNum=1;
                $newRecord->itemPrice=($product->webPrice)*($newRecord->itemNum);
                return $newRecord->save();
       }else{
           ++$record->itemNum;
           $record->itemPrice=($product->webPrice)*($record->itemNum);
           return $record->save();
       }
     }
     // 购物车中删除商品
     /**
      * [delete description]
      * @param  [int] $id [product ID]
      * @return [int]     [the number of products has deleted]
      */
     function delete($id){
         $customerId=Auth::user()->id;
        $record=($this->model)::where(['customer_Id'=>($customerId),'pro_Id'=>$id])->first();
        $cutNum=$record->itemNum;
        $record->delete();
        return $cutNum;
     }
     /**
      * [all description]
      * @return [colletion] [description]
      */
     function all(){
           $customerId=Auth::user()->id;
           $records=($this->model)::where(['customer_Id'=>($customerId)])->get();
           return $records;
     }
     // 购物车总费
     function totalPrice(){
         $customerId=Auth::user()->id;
         $records=$this->all();
         $total=0;
         foreach($records as $record){
          $total+=$record->itemPrice;
        }
        return $total;
     }
     // 总计不含运费
    //  function priceWithoutShipment();
     // 某一项费用
     function itemPrice($id){
       $customerId=Auth::user()->id;
       $record=($this->model)::where(['customer_Id'=>($customerId),'id'=>$id])->first();
       return $record->itemPrice;
     }
     // 购物车商品数量
     function totalNum(){
       $customerId=Auth::user()->id;
       $records=$this->all();
       $totalNum=0;
       foreach ($records as $record) {
          $totalNum+=$record->itemNum;
       }
       return $totalNum;
     }
     public function cut($id){
        $customerId=Auth::user()->id;
        $product=product::find($id);
        $record=($this->model)::where(['customer_Id'=>($customerId),'pro_Id'=>$id])->first();
        $record->itemNum--;
        $record->itemPrice=($product->webPrice)*($record->itemNum);
        if($record->itemNum==0){
          return $record->delete();
        }
        return $record->save();
     }
     // 是否包含某个条目
    //  function search($array $data){
      //  \Searchy::shoppingCart('','proDescription')->query($content)->having('relevance', '>', 20)->get();
    //  }
     abstract function getModel();
}
