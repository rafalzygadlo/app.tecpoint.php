<?php

namespace App\Filament\Admin\Resources\FlatResource\Pages;

use App\Filament\Admin\Resources\FlatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFlats extends ListRecords
{
    protected static string $resource = FlatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
