<?php

namespace App\Filament\Admin\Resources\AddressResource\Pages;

use App\Filament\Admin\Resources\AddressResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAddress extends ListRecords
{
    protected static string $resource = AddressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
