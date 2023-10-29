<?php

// custom_helpers.php
use vahidkaargar\Currencies\Currency;

if (!function_exists('currency')) {
    function currency($currency = '')
    {
        return Currency::fetch($currency);
    }
}
