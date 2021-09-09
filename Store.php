<?php

class Store
{
    private array $allCars;

    public function __construct($allCars)
    {
        $this->allCars = $allCars;
    }

    private function displayCars()
    {
        foreach ($this->allCars as $key=>$car)
        {
            if ($car->isSold() === false)
            {
                echo "{$key} || {$car->car->getName()} with {$car->car->getEngVolume()} liter engine. Costs {$car->getPrice()}$" . PHP_EOL;
            }
        }
    }

    public function buyCar($buyer)
    {
        $buy = readline ('Want to buy a car? y/n : ');
        while ($buy === 'y') {
            $this->displayCars();
            $choice = (int)readline("{$buyer->getName()}, choose your auto: ");
            if ($buyer->getMoney() >= $this->allCars[$choice]->getPrice()) {
                $this->allCars[$choice]->sellCar();
                echo "{$buyer->getName()} has bought a {$this->allCars[$choice]->car->getName()}" . PHP_EOL;
            } else {
                echo 'Not enough funds' . PHP_EOL;
            }
            $buy = readline('Looking for another car? y/n : ');
        }

    }
}
