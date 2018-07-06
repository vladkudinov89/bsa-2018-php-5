<?php

namespace App\Services;

class CurrencyGenerator
{
    public static function generate(): array
    {
        // todo implement
        return [

            new Currency(
                1,
                'Bitcoin',
                6623.91,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/1.png',
                -1.24),

            new Currency(
                2,
                'Ethereum',
                472.05,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/1027.png',
                -1.31),

            new Currency(
                3,
                'Maker',
                553.92,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/1518.png',
                0.09),

            new Currency(
                4,
                'Dash',
                229.92,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/131.png',
               -3.98),

            new Currency(
                5,
                'Qtum',
                8.76,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/1684.png',
               -2.99),

        ];
    }
}