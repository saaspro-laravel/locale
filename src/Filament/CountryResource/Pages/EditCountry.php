<?php

namespace Utyemma\SaasPro\Filament\Resources\Locale\CountryResource\Pages;

use Utyemma\SaasPro\Filament\Resources\Locale\CountryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCountry extends EditRecord
{
    protected static string $resource = CountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
