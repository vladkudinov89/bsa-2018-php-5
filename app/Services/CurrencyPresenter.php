<?php

namespace App\Services;

class CurrencyPresenter
{
    
    public static function present(Currency $currency): array
    {
        // todo implement
        return [
          'id' => $currency->getId(),
          'name' => $currency->getName(),
          'img' => $currency->getImageUrl(),
          'price' => $currency->getPrice(),
          'daily_change' => $currency->getDailyChangePercent()
        ];

    }
}