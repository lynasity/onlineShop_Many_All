<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderForm extends Model
{
     $table='orderForms';
     public function products(){
      $this->hasMany('App\product','orderId');
    }
}
