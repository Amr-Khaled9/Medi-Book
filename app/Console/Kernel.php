<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * Add any custom command classes here (e.g. \App\Console\Commands\DeleteDailyAppointments::class)
     *
     * @var array<int, class-string>
     */
    protected $commands = [
        // Register your custom commands here
        // \App\Console\Commands\DeleteDailyAppointments::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Example: run the command every day at 23:59
        $schedule->command('appointments:soft-delete-daily')->dailyAt('23:59');

        // For local testing you can also run it every minute (remove/comment in production)
        // $schedule->command('appointments:soft-delete-daily')->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}