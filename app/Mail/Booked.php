<?php

namespace App\Mail;

use App\Models\Bookings;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Booked extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $booking;

    public function __construct(Bookings $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('bazirakyetonny15@gmail.com')
        ->view('view.emails.booked')
        ->with([
                        'student_name' => $this->booking->student_name,
                        // 'orderPrice' => $this->order->price,
                    ]);
    }
}
