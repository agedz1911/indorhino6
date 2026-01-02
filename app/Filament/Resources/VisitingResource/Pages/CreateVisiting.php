<?php

namespace App\Filament\Resources\VisitingResource\Pages;

use App\Filament\Resources\VisitingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateVisiting extends CreateRecord
{
    use Translatable;

    protected static string $resource = VisitingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
