<?php

namespace App\Filament\Resources\WelcomeMessageResource\Pages;

use App\Filament\Resources\WelcomeMessageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWelcomeMessage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = WelcomeMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
