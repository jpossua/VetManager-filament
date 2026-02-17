<?php

namespace App\Filament\Resources\Duenos\Pages;

use App\Filament\Resources\Duenos\DuenoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDuenos extends ListRecords
{
    protected static string $resource = DuenoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
