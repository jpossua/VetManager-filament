<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Register as BaseRegister;

class CustomRegister extends BaseRegister
{
    protected string $view = 'filament.pages.auth.custom-register';

    public function getHeading(): string
    {
        return 'Crear Cuenta Veterinario';
    }
    public function getSubHeading(): string
    {
        return 'Únete a la plataforma ecológica.';
    }

    public function getLayout(): string
    {
        return 'filament.pages.auth.custom-register-layout';
    }
}
