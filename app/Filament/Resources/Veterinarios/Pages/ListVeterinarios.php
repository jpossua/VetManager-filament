<?php

namespace App\Filament\Resources\Veterinarios\Pages;

use App\Filament\Resources\Veterinarios\VeterinarioResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVeterinarios extends ListRecords
{
    protected static string $resource = VeterinarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
