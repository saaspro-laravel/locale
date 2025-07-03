<?php

use Utyemma\SaasPro\Support\Locale;

if(!function_exists('locale')) {
    function locale(){
        return new Locale;
    }
}