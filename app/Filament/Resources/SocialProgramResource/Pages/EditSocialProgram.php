<?php

namespace App\Filament\Resources\SocialProgramResource\Pages;

use App\Filament\Resources\SocialProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialProgram extends EditRecord
{
    protected static string $resource = SocialProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
