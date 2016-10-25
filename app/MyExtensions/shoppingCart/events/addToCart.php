<?php

namespace App\MyExtensions\shoppingCart\events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use  App\MyExtensions\shoppingCart\models\shoppingCart;
class addToCart
{
    use InteractsWithSockets, SerializesModels;
    public $shoppingCart;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(shoppingCart $cart)
    {
        $this->shoppingCart=$cart;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
