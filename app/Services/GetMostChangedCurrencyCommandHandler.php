<?php

namespace App\Services;

class GetMostChangedCurrencyCommandHandler
{

    private $repository;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle(): Currency
    {
        // todo implement
        return max($this->repository->findAll());

    }
}