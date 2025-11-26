<?php

namespace App\Filament\Resources\DoctorSchedules\Tables;

use App\Models\DoctorSchedule;
use Carbon\Carbon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DoctorSchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('day_of_week')
                    ->searchable(),
                TextColumn::make('start_time')
                    ->time()
                    ->sortable(),
                TextColumn::make('end_time')
                    ->time()
                    ->sortable(),
                TextColumn::make('doctor.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('max_appointments'),

                TextColumn::make('current_appointments')
                    ->label('Current Appointments')
                    ->formatStateUsing(function ($state, $record) {
                       DoctorSchedule::resetCurrentAppointmentsIfNewDay($record);
                        return $record->current_appointments;
                    }),
                IconColumn::make('available')
                    ->label('Available')
                    ->boolean()
                    ->state(function ($record) {
                        return DoctorSchedule::is_Avalible($record);
                    }),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
