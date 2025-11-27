<?php

namespace App\Filament\Widgets;

use App\Models\Booking as ModelsBooking;
use App\Models\DoctorSchedule;
use App\Models\Specialty;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Booking extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Daily Bookings', ModelsBooking::whereDate('created_at', today())->count())
                ->description('Total bookings made today')
                ->descriptionIcon('heroicon-o-calendar')
                ->color('primary'),

            Stat::make(
                'Doctors Available Today',
                DoctorSchedule::where('day_of_week', strtolower(now()->format('l')))->count()
            )
                ->description('Number of available doctors today')
                ->descriptionIcon('heroicon-o-user')
                ->color('success'),

            Stat::make('Specialties', Specialty::count())
                ->description('Total number of specialties')
                ->descriptionIcon('heroicon-o-rectangle-group')
                ->color('info'),
        ];
    }
}
