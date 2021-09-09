<?php

class Car
{
    private string $carName;
    private float $carEngineVolume;

    public function __construct($carName, $carEngineVolume) {
        $this->carName = $carName;
        $this->carEngineVolume = $carEngineVolume;
    }

    public function getName() {
        return $this->carName;
    }

    public function getEngVolume() {
        return $this->carEngineVolume;
    }
}