<?php
declare(strict_types=1);

namespace Creational\Builder;

require __DIR__ . '/../vendor/autoload.php';

echo "=== Builder Pattern Demo ===\n\n";

echo "Build Knight:" . PHP_EOL;
$director = new WarriorDirector();
$knightBuilder = new KnightWarriorBuilder();
$director->setBuilder($knightBuilder);
$director->constructBasicWarrior();
$knight = $knightBuilder->getWarrior();
$knight->showSpecifications();

echo PHP_EOL . "Build Archer:" . PHP_EOL;
$archerBuilder = new ArcherWarriorBuilder();
$director->setBuilder($archerBuilder);
$director->constructBasicWarrior();
$archer = $archerBuilder->getWarrior();
$archer->showSpecifications();

echo PHP_EOL . "Build Mage:" . PHP_EOL;
$mageBuilder = new MageWarriorBuilder();
$director->setBuilder($mageBuilder);
$director->constructBasicWarrior();
$mage = $mageBuilder->getWarrior();
$mage->showSpecifications();