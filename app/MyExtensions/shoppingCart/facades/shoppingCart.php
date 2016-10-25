<?php
namespace App\MyExtensions\shoppingCart\facades;
use Illuminate\Support\Facades\Facade;
class shoppingCart extends Facade{

  protected static function getFacadeAccessor(){
    return 'MyExtensions/shoppingCart';
  }
}
