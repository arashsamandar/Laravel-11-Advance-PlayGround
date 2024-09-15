<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatedListener
{

    public function __construct()
    {
        //
    }

    public function handle(UserCreatedEvent $event): void
    {
        //
    }
}
