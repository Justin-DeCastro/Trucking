<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $senderName;
    public $trackingNumber;

    /**
     * Create a new message instance.
     *
     * @param $booking
     * @param $senderName
     * @param $trackingNumber
     * @return void
     */
    public function __construct($booking, $senderName, $trackingNumber)
    {
        $this->booking = $booking;
        $this->senderName = $senderName;
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order_status_updated')
                    ->with([
                        'status' => $this->booking->status,
                        'order_id' => $this->booking->id,
                        'tracking_number' => $this->trackingNumber,
                        'sender_name' => $this->senderName,
                    ]);
    }
}
