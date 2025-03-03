<?php
declare(strict_types=1);

namespace Behavioral\Command;

class Mage implements Warrior
{
    private static int $counter = 0;
    private int $id;

    public function __construct()
    {
        $this->id = ++self::$counter;
        echo "Mage #$this->id created!\n";
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function attack(): void
    {
        echo "Mage #$this->id casts a fireball!\n";
    }

    public function defend(): void
    {
        echo "Mage #$this->id conjures a magical shield!\n";
    }
}
