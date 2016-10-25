<?php

namespace App\Listeners;
class orderEventSubscriber{
  public function onPlaceOrder(){

  }
  public function onCancelOrder(){

  }
  public function subscribe($events){
    $events->listen('','');
    $events->listen('','');
  }
}
