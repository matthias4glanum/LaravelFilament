<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Chats', Patient::query()->where('type', 'cat')->count()),
            Stat::make('Chiens', Patient::query()->where('type', 'dog')->count()),
            Stat::make('Lapins', Patient::query()->where('type', 'rabbit')->count()),
        ];
    }
}
