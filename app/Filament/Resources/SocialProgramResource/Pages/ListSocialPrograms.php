<?php

namespace App\Filament\Resources\SocialProgramResource\Pages;

use App\Filament\Resources\SocialProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocialPrograms extends ListRecords
{
    protected static string $resource = SocialProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
