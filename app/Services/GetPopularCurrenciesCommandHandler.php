<?php

namespace App\Services;

use App\Traits\ArraySort;

class GetPopularCurrenciesCommandHandler
{
    use ArraySort;
    
    const POPULAR_COUNT = 3;
    private $repository;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle(int $count = self::POPULAR_COUNT): array
    {
        // todo implement
        $currencies = $this->repository->findAll();

        return array_slice(self::crypt_sort($currencies, 'price' ,SORT_DESC), 0, $count);

    }
}