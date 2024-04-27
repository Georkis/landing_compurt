<?php

namespace App\Filament\Resources\ContactDataResource\Pages;

use App\Filament\Resources\ContactDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactData extends ListRecords
{
    protected static string $resource = ContactDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
