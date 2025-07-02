<?php

namespace Utyemma\SaasPro\Support;

use Utyemma\SaasPro\Abstracts\Support;
use Utyemma\SaasPro\Models\Country;
use Illuminate\Support\Facades\Http;

class Locale extends Support {

    public function current(string $ip) {
        try {
            $data = Http::get("http://ip-api.com/json/{$ip}")->json();
            if(!$data || $data['status'] !== 'success') return state(false, '');            
            return state(true, '', $data);
        } catch (\Throwable $th) { 
            return state(false, $th->getMessage());
        }
    }

    public function country() {
        return Country::current();
    }

    public function currency() {
        return $this->country()->currency;
    }

    function gateway(){
        return $this->country()->gateway;
    }

    function amount(float|int $amount){
        return strpos((string) $amount, '.') !== false
            ? rtrim(rtrim(number_format((float) $amount, 2, '.', ''), '0'), '.')
            : $amount;
    }

}