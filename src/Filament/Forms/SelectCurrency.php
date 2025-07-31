<?php

namespace SaasPro\Locale\Filament\Forms;

use SaasPro\Locale\Models\Currency;
use Filament\Forms\Components\Select;

class SelectCurrency extends Select {

    protected function setUp() : void {
        parent::setUp();

        $this->options = Currency::pluck('name', 'code');
    }

}
