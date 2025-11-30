<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\ChartWidget;

class BookingChart extends ChartWidget
{
    protected ?string $heading = 'Booking Chart';

    protected function getData(): array
    {
        // days labels
        $labels = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $counts = [];

        foreach ($labels as $dayName) {
            $counts[] = Booking::withTrashed()               
                ->whereRaw("DAYNAME(created_at) = ?", [$dayName])
                ->count();
        }
        return [
            'datasets' => [
                [
                    'label' => 'Bookings per Day of Week',
                    'data' => $counts,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
