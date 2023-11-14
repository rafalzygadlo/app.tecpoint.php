<?php

namespace App\Filament\Resources\FlatResource\Pages;

use App\Filament\Resources\FlatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFlat extends EditRecord
{
    protected static string $resource = FlatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
