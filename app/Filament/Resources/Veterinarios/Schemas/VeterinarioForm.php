<?php

namespace App\Filament\Resources\Veterinarios\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VeterinarioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('especialidad')
                    ->required(),
                TextInput::make('contacto')
                    ->required(),
            ]);
    }
}
