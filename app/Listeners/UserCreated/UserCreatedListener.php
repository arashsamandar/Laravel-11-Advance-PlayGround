<?php

namespace App\Listeners\UserCreated;

use App\Events\UserCreatedEvent;
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
