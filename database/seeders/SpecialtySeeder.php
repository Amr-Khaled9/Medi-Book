<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialties')->delete();

        $specialties = [
            [
                'name' => 'Cardiology',
                'description' => 'Heart and blood vessels',
                'icon' => 'heart-pulse',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dentistry',
                'description' => 'Teeth and oral health',
                'icon' => 'tooth',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Neurology',
                'description' => 'Nervous system disorders',
                'icon' => 'brain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pediatrics',
                'description' => 'Infants, children, and teens',
                'icon' => 'baby',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Orthopedics',
                'description' => 'Bones, joints, and muscles',
                'icon' => 'bone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gastroenterology',
                'description' => 'Digestive system care',
                'icon' => 'stomach',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dermatology',
                'description' => 'Skin, hair, and nails',
                'icon' => 'skin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ophthalmology',
                'description' => 'Eye care and vision',
                'icon' => 'eye',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($specialties as $item) {
            DB::table('specialties')->insert($item);
        }
    }
}
