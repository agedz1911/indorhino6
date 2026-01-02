<?php

namespace App\Filament\Resources\GuidelineAbstractResource\Pages;

use App\Filament\Resources\GuidelineAbstractResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGuidelineAbstract extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = GuidelineAbstractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
