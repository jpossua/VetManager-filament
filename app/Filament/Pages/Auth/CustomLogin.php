<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;

class CustomLogin extends BaseLogin
{
    protected string $view = 'filament.pages.auth.custom-login';

    public function getHeading(): string
    {
        return 'Bienvenido';
    }

    public function getSubHeading(): string
    {
        return 'Ingresa tus credenciales para acceder al panel.';
    }

    public function getLayout(): string
    {
        return 'filament.pages.auth.custom-login-layout';
    }
}
