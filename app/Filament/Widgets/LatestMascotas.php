<?php

namespace App\Filament\Widgets;

use App\Models\Mascota;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestMascotas extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Mascota::query()->latest()->limit(5))
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->label('Mascota')
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('especie')
                    ->badge(),
                Tables\Columns\TextColumn::make('dueno.nombre')
                    ->label('Dueño'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Registrado')
                    ->date(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Estado')
                    ->default('Active')
                    ->badge()
                    ->color('success'),
            ]);
    }
}
