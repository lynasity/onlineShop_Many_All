<?php

namespace App\MyExtensions\shoppingCart\models;
use Illuminate\Database\Eloquent\Model;

class shoppingCart extends Model
{
    protected $table='shoppingCart';
    protected $fillable=['pro_Id','customer_Id','itemNum','itemPrice'];
    public function customer(){
        return $this->belongsTo('App\customer','customer_Id');
    }
}
