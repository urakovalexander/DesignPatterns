<?php
declare(strict_types=1);

namespace Behavioral\Command;

require __DIR__ . '/../vendor/autoload.php';

echo "=== Command Pattern Demo ===\n\n";

// Создаём воинов
$archer = new Archer();
$mage   = new Mage();
$knight = new Knight();

echo "\n";

// Создаём команды
$attackArcher = new AttackCommand($archer);
$defendMage   = new DefendCommand($mage);
$attackKnight = new AttackCommand($knight);

// Создаём инвокера (командира)
$commander = new Commander();

// Добавляем команды в очередь
$commander->setCommand($attackArcher);
$commander->setCommand($defendMage);
$commander->setCommand($attackKnight);

// Выполняем все команды
echo "Commander executes commands:\n";
$commander->executeCommands();
