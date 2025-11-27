<?php

namespace App\Filament\Widgets;

use App\Models\Doctor as ModelDoctor;
use App\Models\Specialty;
use Filament\Widgets\ChartWidget;

class Doctor extends ChartWidget
{
    protected ?string $heading = 'Doctor';

    protected function getData(): array
    {
        $specialties = Specialty::withCount('doctors')->get();

         $colors = [
            '#FF6384', // Cardiology
            '#36A2EB', // Dentistry
            '#FFCE56', // Neurology
            '#4BC0C0', // Pediatrics
            '#9966FF', // Orthopedics
            '#FF9F40', // Gastroenterology
            '#C9CBCF', // Dermatology
            '#FF6666', // Ophthalmology
        ];

        return [
            'labels' => $specialties->pluck('name'),  
            'datasets' => [
                [
                    'label' => 'Doctors Count',
                    'data' => $specialties->pluck('doctors_count'),
                    'backgroundColor' => $colors,  
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
