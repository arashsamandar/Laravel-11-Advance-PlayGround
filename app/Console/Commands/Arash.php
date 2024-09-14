<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use PharIo\Version\Exception;

class Arash extends Command
{

    protected $signature = 'sendMail';

    protected $description = 'Send a test email';

    public function handle(): void
    {
        try {
            Mail::raw('Hello world', function ($message) {
                $message->to('arash.internet@gmail.com')->subject('From LaravelEleven');
            });
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
        }
    }
}
