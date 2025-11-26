<?php

namespace App\Console\Commands;

use App\Models\Appointment;
use App\Models\Booking;
use Illuminate\Console\Command;

class DeleteDailyAppointments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appointments:soft-delete-daily';
    protected $description = 'Soft delete all appointments at the end of the day';


    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Booking::query()->delete(); // Soft Delete
        $this->info('All appointments soft deleted successfully!');
    }
}
