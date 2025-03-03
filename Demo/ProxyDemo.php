<?php
declare(strict_types=1);

namespace Structural\Proxy;

require __DIR__ . '/../vendor/autoload.php';

echo "=== Proxy Pattern Demo ===\n\n";

echo "Creating lazy proxies for warriors:\n";

$lazyArcher = new LazyWarriorProxy(function() {
    return new RealArcher();
});

$lazyMage = new LazyWarriorProxy(function() {
    return new RealMage();
});

$lazyKnight = new LazyWarriorProxy(function() {
    return new RealKnight();
});

echo "\nDisplaying warriors via proxy (real objects are created on-demand):\n";
$lazyArcher->display();
$lazyMage->display();
$lazyKnight->display();

echo "\nRetrieving IDs via proxy:\n";
echo "Archer ID: " . $lazyArcher->getId() . "\n";
echo "Mage ID: " . $lazyMage->getId() . "\n";
echo "Knight ID: " . $lazyKnight->getId() . "\n";
