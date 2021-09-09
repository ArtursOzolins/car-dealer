<?php

class Buyer
{

    private string $name;
    private int $money;

    public function __construct($name, $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMoney(): int
    {
        return $this->money;
    }
}
