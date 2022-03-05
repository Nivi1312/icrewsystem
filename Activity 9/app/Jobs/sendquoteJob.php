<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\Gmail;
use GuzzleHttp\Client as GuzClient;


class sendquoteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $quotes;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($quotes)
    {
        $this->quotes=$quotes;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(){

        Mail::to($this->quotes['email'])->send(new Gmail($this->quotes));

    }
}

