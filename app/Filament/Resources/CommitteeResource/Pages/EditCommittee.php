<?php

namespace App\Filament\Resources\CommitteeResource\Pages;

use App\Filament\Resources\CommitteeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommittee extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = CommitteeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
