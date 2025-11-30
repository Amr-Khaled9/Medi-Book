<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();

        // جلب كل التخصصات
        $specialties = Specialty::all();

        foreach ($specialties as $specialty) {
            // إنشاء 3 دكاترة لكل تخصص
            for ($i = 1; $i <= 3; $i++) {
                Doctor::create([
                    'name' => $faker->name,
                    'job_title' => $faker->jobTitle,
                    'phone' => $faker->phoneNumber,
                    'email' => $faker->unique()->safeEmail,
                    'status' => 1,
                    'experience' => $faker->paragraph,
                    'about' => $faker->sentence(10),
                    'specialty_id' => $specialty->id,
                    'image' => 'default-doctor.png', // صورة افتراضية
                ]);
            }
        }
    }
}
