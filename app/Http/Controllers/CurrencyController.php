<?php

namespace App\Http\Controllers;

use App\Services\CurrencyPresenter;
use App\Services\CurrencyRepositoryInterface;
use App\Services\GetMostChangedCurrencyCommandHandler;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public $repository;
    //public $json_unstable;

    public function __construct(CurrencyRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function index()
    {
       $json_currency = [];
        foreach ($this->repository->findAll() as $currency){
            $json_currency[] = CurrencyPresenter::present($currency);
        }
        return response()->json($json_currency);
    }

    public function unstable()
    {
        $unstable = app(GetMostChangedCurrencyCommandHandler::class);
//        dd($unstable);
        $uns_arr = CurrencyPresenter::present($unstable->handle());
//        dd($uns_arr);
        return response()->json($uns_arr);

    }
}
