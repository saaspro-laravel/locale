<?php

namespace SaasPro\Locale\Facades;

use Illuminate\Support\Facades\Facade;
use SaasPro\Locale\Locale as LocaleLocale;

class Locale extends Facade {

    protected static function getFacadeAccessor() {
        return LocaleLocale::class;
    }

}