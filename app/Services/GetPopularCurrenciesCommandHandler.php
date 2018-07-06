<?php

namespace App\Services;

class GetPopularCurrenciesCommandHandler
{
    const POPULAR_COUNT = 3;
    private $repository;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function handle(int $count = self::POPULAR_COUNT): array
    {
        // todo implement
        $arrSearch = $this->repository->findAll();
        return $arrSearch->map(function ($item){
            return $item->getPrice();
        })
            ->sortByDesc(function ($item){
                return $item->getPrice();
            })->take($count)->values()->get();





    }
}