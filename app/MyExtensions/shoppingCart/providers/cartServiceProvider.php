<?php
namespace App\MyExtensions\shoppingCart\providers;
use Illuminate\Support\ServiceProvider;
use App\MyExtensions\shoppingCart\Executors\shoppingCartExecutor;
class cartServiceProvider extends ServiceProvider{

    protected $defer=true;
   public function boot(){

   }
   public function register(){
      $this->app->singleton('MyExtensions/shoppingCart',function($app) {
           return new shoppingCartExecutor();
        });
   }
   public function provides(){
     return ['MyExtensions/shoppingCart'];
   }
}
