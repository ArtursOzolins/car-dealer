<?php

require_once 'Car.php';
require_once 'StoreItem.php';
require_once 'Store.php';
require_once  'Buyer.php';

$cars =
    [
        new Car('BMW', 2.5),
        new Car('Opel', 2.0),
        new Car('Nissan', 1.8)
    ];

$items =
    [
        new StoreItem($cars[0], 2300, false),
        new StoreItem($cars[1], 2600, false),
        new StoreItem($cars[2], 3700, false)
    ];

$bestAuto = new Store ($items);

$john = new Buyer ('John', 2800);

$bestAuto->buyCar($john);

