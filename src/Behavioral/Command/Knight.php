<?php
declare(strict_types=1);

namespace Behavioral\Command;

class Knight implements Warrior
{
    private static int $counter = 0;
    private int $id;

    public function __construct()
    {
        $this->id = ++self::$counter;
        echo "Knight #$this->id created!\n";
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function attack(): void
    {
        echo "Knight #$this->id swings his sword!\n";
    }

    public function defend(): void
    {
        echo "Knight #$this->id raises his shield!\n";
    }
}
