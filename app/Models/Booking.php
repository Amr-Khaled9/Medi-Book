<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
     use SoftDeletes;
    protected $fillable = ['id', 'name_patient', 'phone_patient', 'email', 'visit_type', 'notes', 'doctor_id', 'specialty_id'];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    public function specialties()
    {
        return $this->belongsTo(Specialty::class, 'specialty_id');
    }
    public static function increment_(array $doctor_id, $today)
    {
        $schedule = DoctorSchedule::whereIn('doctor_id', $doctor_id)
            ->where('day_of_week', $today)
            ->first();

        if ($schedule) {
             if ($schedule->current_appointments < $schedule->max_appointments) {
                $actualBookings = Booking::whereIn('doctor_id', $doctor_id)
                    ->whereDate('created_at', now()->toDateString())
                    ->count();

                 $schedule->current_appointments = $actualBookings;
                $schedule->save();
            }
        }

        return $schedule;
    }
}
