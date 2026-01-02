<?php

namespace App\Filament\Resources\WelcomeMessageResource\Pages;

use App\Filament\Resources\WelcomeMessageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWelcomeMessages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = WelcomeMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
