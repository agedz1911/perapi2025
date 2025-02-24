<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources\ScheduleSessionResource\Pages;

use App\Filament\Clusters\ScientificSchedule\Resources\ScheduleSessionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScheduleSessions extends ListRecords
{
    protected static string $resource = ScheduleSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
