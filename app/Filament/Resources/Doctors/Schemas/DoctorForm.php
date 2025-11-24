<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('job_title')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Toggle::make('status')
                    ->required(),
                Textarea::make('experience')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('about')
                    ->required()
                    ->columnSpanFull(),
                Select::make('specialty_id')
                    ->label('Specialty')
                    ->relationship('specialty', 'name') 
                    ->required()

            ]);
    }
}
