<?php

namespace App;
// use App\product;
use Illuminate\Database\Eloquent\Model;
use Baum\Node as nodeModel;
class cate extends nodeModel
{
   protected $table='cates';
   protected $fillable=['id','cName'];

  protected $parentColumn = 'parent_id';

  // 'lft' column name
  protected $leftColumn = 'lft';

  // 'rgt' column name
  protected $rightColumn = 'rgt';

  // 'depth' column name
  protected $depthColumn = 'depth';

  // guard attributes from mass-assignment
  protected $guarded = array('id', 'parent_id', 'lft', 'rgt', 'depth');
  // 定义一个品类关联多个产品
  public function products(){
    return $this->hasMany('App\product','cateId');
  }
}
