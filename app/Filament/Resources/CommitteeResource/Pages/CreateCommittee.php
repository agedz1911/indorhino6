<?php

namespace App\Filament\Resources\CommitteeResource\Pages;

use App\Filament\Resources\CommitteeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCommittee extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = CommitteeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
