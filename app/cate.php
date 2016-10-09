<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cate extends Model
{
   protected $table='cates';
   protected $fillable=['id','cName'];
}
