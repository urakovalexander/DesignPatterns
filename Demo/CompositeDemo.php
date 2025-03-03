<?php
declare(strict_types=1);

namespace Structural\Composite;

require __DIR__ . '/../vendor/autoload.php';

echo "=== Composite Pattern Demo ===\n\n";

echo "Create warriors:" . PHP_EOL;
$archer = new Archer();
$mage   = new Mage();
$knight = new Knight();

echo "\nDisplay warriors:" . PHP_EOL;
$archer->display();
$mage->display();
$knight->display();

echo "\nCreate army:" . PHP_EOL;
$army = new Army();
$army->add($archer);
$army->add($mage);
$army->add($knight);

echo "\nDisplay army:" . PHP_EOL;
$army->display();

echo "\nCreate sub army:" . PHP_EOL;
$subArmy = new Army();
$subArmy->add(new Archer());
$subArmy->add(new Knight());

$army->add($subArmy);

echo "\nDisplay army with sub army:" . PHP_EOL;
$army->display();
