<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources\ScheduleSessionResource\Pages;

use App\Filament\Clusters\ScientificSchedule\Resources\ScheduleSessionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScheduleSession extends EditRecord
{
    protected static string $resource = ScheduleSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
