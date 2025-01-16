<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PaymentReminderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:payment-reminder-emails';

    /**
     * The console command description.
     *
     * @var string
     */
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
