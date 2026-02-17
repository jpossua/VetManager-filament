<?php

namespace App\Filament\Widgets;

use App\Models\Dueno;
use App\Models\Mascota;
use App\Models\Veterinario;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pacientes (Mascotas)', Mascota::count())
                ->description('32% incremento')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Stat::make('Dueños Registrados', Dueno::count())
                ->description('Clientes activos')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('primary')
                ->chart([17, 16, 14, 15, 14, 13, 12]),

            Stat::make('Veterinarios', Veterinario::count())
                ->description('Personal médico')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('warning'),
        ];
    }
}
