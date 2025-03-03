<?php

declare(strict_types=1);

namespace Creational\Factory;

require __DIR__ . '/../vendor/autoload.php';

echo "=== Factory Pattern Demo ===\n\n";

$warriorFactory = new WarriorFactory();

$warriorTypes = ['archer', 'mage', 'knight'];

foreach ($warriorTypes as $type) {
    $warrior = $warriorFactory->createWarrior($type);
    echo $warrior->getDescription() . ' - ' . $warrior->attack() . PHP_EOL;
}

