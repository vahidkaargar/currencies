<?php

namespace vahidkaargar\Currencies\Tests;

use Orchestra\Testbench\TestCase;
use vahidkaargar\Currencies\Currency;

class CurrencyTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        require __DIR__ . '/../../src/helpers.php';
        $this->currenciesFromFile = json_decode(file_get_contents(__DIR__ . '/../../src/data/currencies.json'), true);
    }
    public function testGetCurrencyList()
    {
        $currencyList = Currency::fetch();
        $this->assertEquals($currencyList, $this->currenciesFromFile);
    }
    public function testGetSpecificCurrency()
    {
        $currency = Currency::fetch('USD');
        $this->assertEquals($currency, $this->currenciesFromFile['USD']);
    }
}