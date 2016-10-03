<?php

namespace Illuminate\Notifications;

use Illuminate\Support\Str;
use Illuminate\Contracts\Notifications\Dispatcher;
//use Illuminate\Notifications\ChannelManager;
trait RoutesNotifications
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $instance
     * @return void
     */
    public function notify($instance)
    {
//       Illuminate\Notifications\ChannelManager;实现了interface Dispatcher
//        dd(app(Dispatcher::class));
        app(Dispatcher::class)->send([$this], $instance);
    }

    /**
     * Get the notification routing information for the given driver.
     *
     * @param  string  $driver
     * @return mixed
     */
    public function routeNotificationFor($driver)
    {
        if (method_exists($this, $method = 'routeNotificationFor'.Str::studly($driver))) {
            return $this->{$method}();
        }

        switch ($driver) {
            case 'database':
                return $this->notifications();
            case 'mail':
                return $this->email;
            case 'nexmo':
                return $this->phone_number;
        }
    }
}
