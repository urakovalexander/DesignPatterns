<?php
declare(strict_types=1);

namespace Structural\Decorator;

use Structural\Composite\Archer;
use Structural\Composite\Knight;
use Structural\Composite\Mage;

require __DIR__ . '/../vendor/autoload.php';

echo "=== Decorator Pattern Demo ===\n\n";

echo "Creating base warriors:\n";
$archer = new Archer();
$mage   = new Mage();
$knight = new Knight();

echo "\n\nDisplaying base warriors:\n";
$archer->display();
echo "\n";
$mage->display();
echo "\n";
$knight->display();
echo "\n\n";

echo "Decorating warriors:\n";
$enchantedArcher = new EnchantedDecorator($archer);
$armoredMage = new ArmoredDecorator($mage);
$enchantedArmoredKnight = new EnchantedDecorator(new ArmoredDecorator($knight));

echo "Displaying decorated warriors:\n";
$enchantedArcher->display();
echo "\n";
$armoredMage->display();
echo "\n";
$enchantedArmoredKnight->display();
echo "\n";
