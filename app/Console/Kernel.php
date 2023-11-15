<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->exec('/usr/bin/php8.1 /kunden/homepages/3/d426936394/htdocs/tec-point/app.tec-point.de/artisan import:user  >> /dev/null 2>&1')->dailyAt('00:05');
        $schedule->exec('/usr/bin/php8.1 /kunden/homepages/3/d426936394/htdocs/tec-point/app.tec-point.de/artisan import:flat  >> /dev/null 2>&1')->dailyAt('00:06');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
