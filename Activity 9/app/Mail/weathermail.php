<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class weathermail extends Mailable
{
    use Queueable, SerializesModels;

    public $weather_report;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($weather_report)
    {
        $this->weather_report=$weather_report;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Weather Report')->view('emails.weathereportmail');
    }
}
