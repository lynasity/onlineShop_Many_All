<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node as nodeModel;
class cate extends nodeModel
{
   protected $table='cates';
   protected $fillable=['id','cName'];
   
  protected $parentColumn = 'parent_id';

  // 'lft' column name
  protected $leftColumn = 'lidx';

  // 'rgt' column name
  protected $rightColumn = 'ridx';

  // 'depth' column name
  protected $depthColumn = 'nesting';

  // guard attributes from mass-assignment
  protected $guarded = array('id', 'parent_id', 'lidx', 'ridx', 'nesting');
}
