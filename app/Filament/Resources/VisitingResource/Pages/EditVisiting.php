<?php

namespace App\Filament\Resources\VisitingResource\Pages;

use App\Filament\Resources\VisitingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditVisiting extends EditRecord
{
    use Translatable;

    protected static string $resource = VisitingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
