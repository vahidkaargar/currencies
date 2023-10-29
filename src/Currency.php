<?php

namespace vahidkaargar\Currencies;

class Currency
{
    public static function fetch($currencyName = '')
    {
        $currencies = json_decode(file_get_contents(__DIR__ . '/data/currencies.json'), true);
        return $currencyName ? $currencies[strtoupper($currencyName)] : $currencies;
    }
}