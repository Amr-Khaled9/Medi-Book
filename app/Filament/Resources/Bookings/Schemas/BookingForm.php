<?php

namespace App\Filament\Resources\Bookings\Schemas;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Models\Specialty;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("name_patient")
                    ->label('Patient Name')
                    ->required(),

                TextInput::make("phone_patient")
                    ->label('Phone')
                    ->required(),

                TextInput::make("email")
                    ->label('Email')
                    ->nullable(),

                Radio::make('visit_type')->options([
                    'New' => 'new',
                    'Follow-up' => 'follow-up',
                ])->required()->columns(2),

                Textarea::make('notes')
                    ->required()
                    ->columnSpanFull(),
                Select::make('specialty_id')
                    ->label('Specialty')
                    ->relationship('Specialties', 'name')
                    ->reactive()
                    ->required(),

                Select::make('doctor_id')
                    ->label('Doctor')
                    ->required()
                    ->options(function (callable $get) {
                        $specialtyId = $get('specialty_id');

                        if (!$specialtyId) {
                            return [];
                        }

                        $doctors = Doctor::where('specialty_id', $specialtyId)->pluck('id')->toArray();;

                        $today = strtolower(now()->format('l'));

                        $doctorIds = DoctorSchedule::where('day_of_week', $today)->whereIn('doctor_id', $doctors)
                            ->pluck('doctor_id')
                            ->toArray();
                        $schedule=Booking::increment_($doctorIds, $today);
                        if ($schedule->current_appointments == $schedule->max_appointments) {
                            return [];
                         }
                        
                        return Doctor::where('specialty_id', $specialtyId)
                            ->whereIn('id', $doctorIds)
                            ->pluck('name', 'id');
                    })
                    ->reactive(),

            ]);
    }
}
