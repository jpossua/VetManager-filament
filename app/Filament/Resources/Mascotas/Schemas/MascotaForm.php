<?php

namespace App\Filament\Resources\Mascotas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class MascotaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('especie')
                    ->required(),
                TextInput::make('raza')
                    ->required(),
                TextInput::make('edad')
                    ->required()
                    ->numeric(),
                Select::make('dueno_id')
                    ->relationship('dueno', 'nombre')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('veterinario_id')
                    ->relationship('veterinario', 'nombre')
                    ->searchable()
                    ->preload()
                    ->required(),
                Toggle::make('adoptado')
                    ->required(),
                Textarea::make('notas')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
