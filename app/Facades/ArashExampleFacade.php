<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\ArashExampleService;

class ArashExampleFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ArashExampleService::class;
    }
}
