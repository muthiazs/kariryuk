<?php

namespace App\Filament\Resources\JobResource\Widgets;

use App\Models\Job;
use Filament\Widgets\ChartWidget;

class StatsOverview extends ChartWidget
{
    protected function getType(): string
    {
        return 'pie'; // bisa diganti ke 'doughnut', 'bar', dll sesuai kebutuhan
    }

    protected function getChartData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Job Status',
                    'data' => [
                        Job::where('status', 'approved')->count(),
                        Job::where('status', 'pending')->count(),
                        Job::where('status', 'rejected')->count(),
                    ],
                    'backgroundColor' => ['#34D399', '#FBBF24', '#F87171'], // hijau, kuning, merah
                ],
            ],
            'labels' => ['Approved', 'Pending', 'Rejected'],
        ];
    }
}
