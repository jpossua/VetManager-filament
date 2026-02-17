<?php

namespace App\Filament\Resources\Veterinarios\Pages;

use App\Filament\Resources\Veterinarios\VeterinarioResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVeterinario extends EditRecord
{
    protected static string $resource = VeterinarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
