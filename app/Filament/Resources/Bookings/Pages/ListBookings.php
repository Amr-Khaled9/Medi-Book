<?php

namespace App\Filament\Resources\Bookings\Pages;

use App\Filament\Resources\Bookings\BookingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }



    public  function getTabs(): array
    {
        return [
            'All' => Tab::make()
                ->query(fn($query) => $query->withoutTrashed()),

            'Archived' => Tab::make()
                ->query(fn($query) => $query->onlyTrashed()),  // السجلات المحذوفة
        ];
    }
}
