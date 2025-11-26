<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    protected $fillable = ['day_of_week', 'start_time', 'end_time', 'doctor_id', 'current_appointments', 'max_appointments'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public static  function is_Avalible($record): bool
    {
        $today = strtolower(now()->format('l'));
        $recordDay = strtolower($record->day_of_week);

        if ($recordDay !== $today) {
            return false;
        }

        if ($record->max_appointments - $record->current_appointments <= 0) {
            return false;
        }

        $currentTime = now()->format('H:i:s');
        $startTime = $record->start_time;
        $endTime   = $record->end_time;

        return $currentTime >= $startTime && $currentTime <= $endTime;
    }

    public static function resetCurrentAppointmentsIfNewDay(DoctorSchedule $record)
    {
        $today = strtolower(now()->format('l'));

        if (strtolower($record->day_of_week) !== $today) {
            $record->current_appointments = 0;
            $record->save();
        }
    }
}
