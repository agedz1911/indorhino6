<?php

namespace App\Filament\Resources\VisitingResource\Pages;

use App\Filament\Resources\VisitingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListVisitings extends ListRecords
{
    use Translatable;

    protected static string $resource = VisitingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
