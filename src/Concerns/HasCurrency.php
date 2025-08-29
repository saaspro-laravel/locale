<?php

namespace SaasPro\Locale;

use SaasPro\Locale\Models\Currency;

trait HasCurrency {

    function currency(){
        return $this->belongTo(Currency::class, 'currency_code');
    }



}