<?php

namespace App\Filament\Resources\RegInfoResource\Pages;

use App\Filament\Resources\RegInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegInfos extends ListRecords
{
    protected static string $resource = RegInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
