<?php

namespace App\Filament\Resources\Duenos;

use App\Filament\Resources\Duenos\Pages\CreateDueno;
use App\Filament\Resources\Duenos\Pages\EditDueno;
use App\Filament\Resources\Duenos\Pages\ListDuenos;
use App\Filament\Resources\Duenos\Schemas\DuenoForm;
use App\Filament\Resources\Duenos\Tables\DuenosTable;
use App\Models\Dueno;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DuenoResource extends Resource
{
    protected static ?string $model = Dueno::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return DuenoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DuenosTable::configure($table);
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
            'index' => ListDuenos::route('/'),
            'create' => CreateDueno::route('/create'),
            'edit' => EditDueno::route('/{record}/edit'),
        ];
    }
}
