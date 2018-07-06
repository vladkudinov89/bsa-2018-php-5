<?php

namespace App\Services;

class GetPopularCurrenciesCommandHandler
{
    const POPULAR_COUNT = 3;
    private $repository;
    public $tet;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public static function array_sort1($array, $on, $order=SORT_ASC)
    {
        $new_array = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }


    public function handle(int $count = self::POPULAR_COUNT): array
    {

        // todo implement
        $currencies = $this->repository->findAll();

        //Work GOOD!
//        usort($currencies, function($currency_1,$currency_2)  {
//            return $currency_1->getPrice() < $currency_2->getPrice();
//        });
//
//        return array_slice($currencies, 0, $count);

            //Work GOOD!
        //$a = array_sort($currencies, 'price', SORT_DESC);

        return array_slice(self::array_sort1($currencies, 'price' ,SORT_DESC), 0, $count);

//        for ($i = 0; $i < $count; $i++) {
//            $a = array_sort($currencies, 'price', SORT_DESC);
//        }
//
//        return $a;
//        return $arrSearch
//            ->sortByDesc(function ($item){
//                return $item->getPrice();
//            })->take($count)->values()->all();
//        return max($arrSearch['price'])->take($count);
//        for ($i = 0; $i < $count; $i++) {
//            for ($j = 0; $j < count($arrSearch); $j++) {
//                foreach ($arrSearch as $key => $value) {
//                    array_filter($arrSearch[$key], function ($index, $item) {
//                        $this->tet[] = max($item->getPrice());
//                        return $this->tet;
//                    });
//                }
//            }
//        }
//        dd($this->tet);
//
//        return $this->tet;

//        $currencies = $this->repository->findAll();
//        $popularCurrencies = [];
//        for ($i = 0; $i < $count; $i++) {
//            $mostPopularId = 0;
//            $mostPopularPrice = 0;
//            foreach ($currencies as $key => $currency) {
//                if ($currency->getPrice() > $mostPopularPrice) {
//                    $mostPopularPrice = $currency->getPrice();
//                    $mostPopularId = $key;
//                }
//            }
//            $popularCurrencies[] = $currencies[$mostPopularId];
//            unset($currencies[$mostPopularId]);
//        }
//        return $popularCurrencies;
//        return $arrSearch;


    }
}