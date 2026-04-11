<?php

namespace App\Filament\Resources\PraeventResource\Pages;

use App\Filament\Resources\PraeventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreatePraevent extends CreateRecord
{
    use Translatable;
    protected static string $resource = PraeventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
