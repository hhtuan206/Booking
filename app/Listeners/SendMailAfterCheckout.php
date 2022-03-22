<?php

namespace App\Listeners;

use App\Events\SendMailEvent;
use App\Mail\MailNotify;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailAfterCheckout implements ShouldQueue
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
     * @param  SendMailEvent  $event
     * @return void
     */
    public function handle(SendMailEvent $event)
    {
        Mail::to($event->user->email)->send(new MailNotify($event->user, $event->cart, $event->subtotal));

    }
}
