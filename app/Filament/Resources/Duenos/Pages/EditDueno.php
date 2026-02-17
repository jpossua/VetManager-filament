<?php

namespace App\Filament\Resources\Duenos\Pages;

use App\Filament\Resources\Duenos\DuenoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDueno extends EditRecord
{
    protected static string $resource = DuenoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
