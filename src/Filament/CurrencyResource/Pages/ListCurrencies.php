<?php

namespace Utyemma\SaasPro\Filament\Resources\Locale\CurrencyResource\Pages;

use Utyemma\SaasPro\Filament\Resources\Locale\CurrencyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCurrencies extends ListRecords
{
    protected static string $resource = CurrencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
