<?php

namespace App\Listeners\UserCreated;

use App\Events\UserCreatedEvent;
use Illuminate\Support\Facades\Log;

class UserCreatedListenerTwo
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
    public function handle(UserCreatedEvent $event): void
    {
        Log::info('Listener Two ( 2 ) Launched ' . $event->message);
    }
}
