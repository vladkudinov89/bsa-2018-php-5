<?php

namespace App\Http\Controllers;

use App\Services\CurrencyPresenter;
use App\Services\CurrencyRepositoryInterface;
use App\Services\GetPopularCurrenciesCommandHandler;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public $repository;
    public $arrPop = [];

    public function __construct(CurrencyRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function index()
    {
        $popArray = app(GetPopularCurrenciesCommandHandler::class);
        
        return view('popular_currencies' , [
            'popArray' => $popArray->handleView()
        ]);

    }
}
