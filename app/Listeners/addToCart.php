<?php

namespace App\Listeners;

use App\Events\shoppingCart;
use Illuminate\Queue\InteractsWithQueue;
// 要增加队列功能需要实现该接口
use Illuminate\Contracts\Queue\ShouldQueue;
use App\product;
class addToCart
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  addToCart  $event
     * @return void
     */
    public function handle(addToCart $event)
    {
        $id=$event->shoppingCart->pro_Id;
        $product=product::find($id);
        $product->proNum++;
        $product->save();
    }
}
