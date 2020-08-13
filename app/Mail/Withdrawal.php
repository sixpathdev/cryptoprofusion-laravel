<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Withdrawal extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $fullname;
    public $amount;
    public $wallet;
    public $due;

    public function __construct($fullname, $amount, $wallet, $due)
    {
        $this->fullname = $fullname;
        $this->amount = $amount;
        $this->wallet = $wallet;
        $this->due = $due;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('billing@cryptoprofusion.com')->view('emails.duepayment-notification');
    }
}
