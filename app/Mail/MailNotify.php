<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$cart,$subTotal)
    {
        //
        $this->data = $data;
        $this->cart = $cart;
        $this->subTotal = $subTotal;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.checkouts')->with([
                                                    'data'=>$this->data,
                                                    'cart'=>$this->cart,
                                                    'sub'=>$this->subTotal
                                                ]);
    }
}
