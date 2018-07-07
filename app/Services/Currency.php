<?php

namespace App\Services;

class Currency
{
    public $id;
    public $name;
    public $price;
    public $imageURL;
    public $dailyChangePer;

    public function __construct(int $id, string $name, float $price, string $imageURL, float $dailyChangePer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->imageURL = $imageURL;
        $this->dailyChangePer = $dailyChangePer;
    }


    // todo implement methods
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImageUrl()
    {
        return $this->imageURL;
    }

    public function getDailyChangePercent()
    {
        return $this->dailyChangePer;
    }
}