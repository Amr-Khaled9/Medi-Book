<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DoctorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('job_title'),
                TextEntry::make('phone'),
                TextEntry::make('email')
                    ->label('Email address'),
                IconEntry::make('status')
                    ->boolean(),
                TextEntry::make('experience')
                    ->columnSpanFull(),
                TextEntry::make('about')
                    ->columnSpanFull(),
                TextEntry::make('specialty_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
