<?php

namespace App\Filament\Resources\SocialNetResource\Pages;

use App\Filament\Resources\SocialNetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialNet extends EditRecord
{
    protected static string $resource = SocialNetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
