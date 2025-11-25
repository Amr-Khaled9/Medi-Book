<?php

namespace App\Filament\Resources\DoctorSchedules\Tables;

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

 
IconColumn::make('available')
    ->label('Available')
    ->boolean()
    ->state(function ($record) {

    // اليوم الحالي
    $today = strtolower(now()->format('l'));
    $recordDay = strtolower($record->day_of_week);

    if ($recordDay !== $today) {
        return false;
    }

    // الوقت الحالي فقط
    $currentTime = now()->format('H:i:s');

    // المقارنة كنصوص (لأنها HH:MM:SS)
    $startTime = $record->start_time; // ex: "09:53:00"
    $endTime   = $record->end_time;   // ex: "10:49:30"

    // لو الوقت الحالي بين البداية والنهاية
    return $currentTime >= $startTime && $currentTime <= $endTime;
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
