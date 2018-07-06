<?php

namespace App\Services;

class GetCurrenciesCommandHandler
{
    private $repository;

    public function __construct(CurrencyRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function handle(): array
    {
        // todo implement
        $this->repository->findAll();

    }
}