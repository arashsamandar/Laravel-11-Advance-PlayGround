<?php

namespace App\Listeners;

use App\Events\ArashEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ArashEventListener
{
    public function __construct()
    {

    }

    public function handle(ArashEvent $event): void
    {
        Log::info('do some shit -> ' . $event->message);
    }
}
