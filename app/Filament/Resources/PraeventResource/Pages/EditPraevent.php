<?php

namespace App\Filament\Resources\PraeventResource\Pages;

use App\Filament\Resources\PraeventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditPraevent extends EditRecord
{
    use Translatable;

    protected static string $resource = PraeventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
