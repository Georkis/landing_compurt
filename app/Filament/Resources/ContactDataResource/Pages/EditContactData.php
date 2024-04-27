<?php

namespace App\Filament\Resources\ContactDataResource\Pages;

use App\Filament\Resources\ContactDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactData extends EditRecord
{
    protected static string $resource = ContactDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
