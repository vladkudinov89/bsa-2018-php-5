<?php

namespace App\Services;

use App\Traits\ArraySort;

class GetMostChangedCurrencyCommandHandler
{
    use ArraySort;

    private $repository;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle(): Currency
    {
        // todo implement
        $currencies = $this->repository->findAll();
        return max($currencies);

    }
}