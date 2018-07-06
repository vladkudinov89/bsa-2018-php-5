<?php

namespace App\Http\Controllers;

use App\Services\CurrencyPresenter;
use App\Services\CurrencyRepositoryInterface;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public $repository;

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
}
