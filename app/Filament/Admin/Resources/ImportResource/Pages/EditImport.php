<?php

namespace App\Filament\Admin\Resources\ImportResource\Pages;

use App\Filament\Admin\Resources\ImportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImport extends EditRecord
{
    protected static string $resource = ImportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
