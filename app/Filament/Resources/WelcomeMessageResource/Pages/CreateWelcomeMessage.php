<?php

namespace App\Filament\Resources\WelcomeMessageResource\Pages;

use App\Filament\Resources\WelcomeMessageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWelcomeMessage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = WelcomeMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
