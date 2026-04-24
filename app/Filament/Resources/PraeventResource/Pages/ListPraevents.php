<?php

namespace App\Filament\Resources\PraeventResource\Pages;

use App\Filament\Resources\PraeventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListPraevents extends ListRecords
{
    use Translatable;
    
    protected static string $resource = PraeventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
