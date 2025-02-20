<?php

namespace App\Filament\Resources\RegInfoResource\Pages;

use App\Filament\Resources\RegInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegInfo extends EditRecord
{
    protected static string $resource = RegInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
