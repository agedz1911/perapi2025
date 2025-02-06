<?php

namespace App\Filament\Resources\GuidelineAbstractResource\Pages;

use App\Filament\Resources\GuidelineAbstractResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuidelineAbstract extends EditRecord
{
    protected static string $resource = GuidelineAbstractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
