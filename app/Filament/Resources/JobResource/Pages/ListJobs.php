<?php

namespace App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\Widgets\StatsOverview;
use App\Filament\Resources\JobResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJobs extends ListRecords
{
     protected static string $resource = \App\Filament\Resources\JobResource::class;
    

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
        protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
