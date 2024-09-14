<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class Arash extends Command
{

    protected $signature = 'samandar';

    protected $description = 'Command description';

    public function handle(): void
    {
        Log::info('hello arash Command Arash Is Working Properly...');
    }
}
