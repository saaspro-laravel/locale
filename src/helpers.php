<?php

use SaasPro\Locale\Locale;

if(!function_exists('locale')) {
    function locale(){
        return new Locale;
    }
}