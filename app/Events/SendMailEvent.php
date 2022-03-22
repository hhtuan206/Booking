<?php

namespace App\Events;

use App\Models\User;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Event;
use Gloudemans\Shoppingcart\Cart;

class SendMailEvent extends Event
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user,$cart,$subtotal;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user,$cart,$subtotal)
    {
        $this->user= $user;
        $this->cart= $cart;
        $this->subtotal= $subtotal;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
