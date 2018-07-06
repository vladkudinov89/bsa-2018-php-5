<?php

namespace App\Http\Controllers;

use App\Services\CurrencyRepositoryInterface;
use App\Services\GetPopularCurrenciesCommandHandler;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function index()
    {
        $popArray = app(GetPopularCurrenciesCommandHandler::class);
        dd($popArray);
        return view('popular_currencies' , [
            'popArray' => $popArray
        ]);

    }
}
