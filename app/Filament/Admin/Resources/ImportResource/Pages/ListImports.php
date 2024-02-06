<?php

namespace App\Filament\Admin\Resources\ImportResource\Pages;

use App\Filament\Admin\Resources\ImportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImports extends ListRecords
{
    protected static string $resource = ImportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
