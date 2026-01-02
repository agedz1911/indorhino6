<?php

namespace App\Filament\Resources\RegInfoResource\Pages;

use App\Filament\Resources\RegInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegInfo extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = RegInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
