<?php
declare(strict_types=1);

namespace Structural\Composite;

class Archer implements Warrior
{
    private static int $counter = 0;
    private int $id;

    public function __construct()
    {
        $this->id = ++self::$counter;
        echo "Archer #$this->id created!\n";
    }
    public function getId(): int
    {
        return $this->id;
    }
        public function display(): void
    {
        echo "(Archer #$this->id) ";;
    }
}
