<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PaymentReminderEmails extends Command
{
    protected $signature = 'app:paymentreminder';
    protected $description = 'Payment reminder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        Log::info('Test command executed at ' . now());
    }
}
