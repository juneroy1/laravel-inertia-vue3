<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HourlyApiCall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hourly-api-call';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $message = "api test". now();
        $this->info($message);
    }
}
