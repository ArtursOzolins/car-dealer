<?php

class StoreItem
{
    private int $price;
    private bool $isSold;

    public function __construct(Car $car, int $price, bool $isSold)
    {
        $this->car = $car;
        $this->price = $price;
        $this->isSold = $isSold;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function isSold()
    {
        return $this->isSold;
    }

    public function sellCar()
    {
        $this->isSold = true;
    }
}
