<?php

namespace Utyemma\SaasPro\Filament\Resources\Locale\CurrencyResource\Pages;

use Utyemma\SaasPro\Filament\Resources\Locale\CurrencyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCurrency extends EditRecord
{
    protected static string $resource = CurrencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
