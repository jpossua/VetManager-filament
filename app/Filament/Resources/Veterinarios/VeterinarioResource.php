<?php

namespace App\Filament\Resources\Veterinarios;

use App\Filament\Resources\Veterinarios\Pages\CreateVeterinario;
use App\Filament\Resources\Veterinarios\Pages\EditVeterinario;
use App\Filament\Resources\Veterinarios\Pages\ListVeterinarios;
use App\Filament\Resources\Veterinarios\Schemas\VeterinarioForm;
use App\Filament\Resources\Veterinarios\Tables\VeterinariosTable;
use App\Models\Veterinario;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VeterinarioResource extends Resource
{
    protected static ?string $model = Veterinario::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return VeterinarioForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VeterinariosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVeterinarios::route('/'),
            'create' => CreateVeterinario::route('/create'),
            'edit' => EditVeterinario::route('/{record}/edit'),
        ];
    }
}
