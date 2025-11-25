<?php

namespace App\Filament\Resources\DoctorSchedules\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class DoctorScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('day_of_week')
                    ->options([
                        'saturday'   => 'Saturday',
                        'sunday'     => 'Sunday',
                        'monday'     => 'Monday',
                        'tuesday'    => 'Tuesday',
                        'wednesday'  => 'Wednesday',
                        'thursday'   => 'Thursday',
                        'friday'     => 'Friday',
                    ])
                    ->required()
                    ->native(false), 

                TimePicker::make('start_time')
                    ->required(),
                TimePicker::make('end_time')
                    ->required(),
                Select::make('doctor_id')->label('doctor')
                ->relationship('doctor','name')
                    ->required()
                    ->searchable()
                    ->preload(),
            ]);
    }
}
