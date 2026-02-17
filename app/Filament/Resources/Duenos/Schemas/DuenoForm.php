<?php

namespace App\Filament\Resources\Duenos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DuenoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->required(),
                Textarea::make('direccion')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
