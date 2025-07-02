<?php

namespace Utyemma\SaasPro\Filament\Resources\Locale\CountryResource\Pages;

use Utyemma\SaasPro\Filament\Resources\Locale\CountryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCountries extends ListRecords
{
    protected static string $resource = CountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
