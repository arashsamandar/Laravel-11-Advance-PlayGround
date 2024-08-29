<?php

namespace App\Listeners;

use App\Events\ArashEventTwo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ArashEventTwoListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ArashEventTwo $event): void
    {
        $uniId = uniqid();
        Log::info($event->message . '   ' . $uniId);
    }
}
