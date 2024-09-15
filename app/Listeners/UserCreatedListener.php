<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class UserCreatedListener
{

    public function __construct()
    {
        //
    }

    public function handle(UserCreatedEvent $event): void
    {
        Log::info('Listener One ( 1 ) Launched ' . $event->message);
    }
}
