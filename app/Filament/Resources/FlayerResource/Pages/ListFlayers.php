<?php

namespace App\Filament\Resources\FlayerResource\Pages;

use App\Filament\Resources\FlayerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFlayers extends ListRecords
{
    protected static string $resource = FlayerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
