<?php

namespace vahidkaargar\Currencies\Tests;

use Orchestra\Testbench\TestCase;

class CurrencyHelperTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        require __DIR__ . '/../../src/helpers.php';
        $this->currenciesFromFile = json_decode(file_get_contents(__DIR__ . '/../../src/data/currencies.json'), true);
    }


    public function testGetCurrencyList()
    {
        $currencyList = currency();
        $this->assertEquals($currencyList, $this->currenciesFromFile);
    }

    public function testGetSpecificCurrency()
    {
        $currency = currency('USD');
        $this->assertEquals($currency, $this->currenciesFromFile['USD']);
    }
}