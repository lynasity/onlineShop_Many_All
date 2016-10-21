<?php
namespace App\MyExtensions\shoppingCart\Executors;
use App\MyExtensions\shoppingCart\Executors\baseCart;
// use App\MyExtensions\shoppingCart\models\shoppingCart as cartModel;
use App\MyExtensions\shoppingCart\contracts\shoppingCart as cartInterface;
class shoppingCartExecutor extends baseCart{

  //  private $cart;
   public function getModel(){
      return 'App\MyExtensions\shoppingCart\models\shoppingCart';
  }
}
