<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // تحديد أيام الأسبوع
        $daysOfWeek = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

        // تحديد أوقات افتراضية
        $timeSlots = [
            ['09:00:00', '12:00:00'],
            ['13:00:00', '16:00:00'],
            ['16:00:00', '19:00:00'],
        ];

        // دكاترة من id 4 إلى 27
        $doctors = Doctor::whereBetween('id', [4, 27])->get();

        foreach ($doctors as $doctor) {
            // اختيار يومين عشوائيين لكل دكتور
            $chosenDays = array_rand(array_flip($daysOfWeek), 2);

            foreach ($chosenDays as $day) {
                // اختيار وقت عشوائي من timeSlots
                $slot = $timeSlots[array_rand($timeSlots)];

                DoctorSchedule::create([
                    'day_of_week' => $day,
                    'start_time' => $slot[0],
                    'end_time' => $slot[1],
                    'max_appointments' => 10,
                    'current_appointments' => 0,
                    'doctor_id' => $doctor->id,
                ]);
            }
        }
    }
}
