<?php

namespace App\Filament\Resources\FlayerResource\Pages;

use App\Filament\Resources\FlayerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFlayer extends EditRecord
{
    protected static string $resource = FlayerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
