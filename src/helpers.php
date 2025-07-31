<?php

use SassPro\Locale\Facades\Locale;

if(!function_exists('locale')) {
    function locale(){
        return new Locale;
    }
}