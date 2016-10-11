<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\product;
class product extends Model
{
	// 管理员要修改产品信息所需要的最低权限,后期可根据不同的修改
    // public $updatePermission='B';
    protected $table='products';
    protected $fillable = [
        'proName', 'proSn', 'proNum','maketPrice','webPrice','proDescription','proImg','cateId','isShow','isHot','deletePermission',
    ];
    //  protected $hidden = [
      
    // ];
    // 一个产品对应一个品类
    public function cates(){
      return $this->belongsTo('App\cate','cateId');
    }
}
