<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class CustomDashboard extends BaseDashboard
{
    protected static ?string $title = 'Dashboard Overview';

    protected string $view = 'filament.pages.custom-dashboard';
}
