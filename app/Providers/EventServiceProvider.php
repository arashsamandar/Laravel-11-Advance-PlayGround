<?php

namespace App\Providers;

use App\Events\ArashEvent;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ArashEvent::class => [
            \App\Listeners\ArashEventListener::class
        ]
    ];
}
