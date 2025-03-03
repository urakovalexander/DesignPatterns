<?php
declare(strict_types=1);

namespace Structural\Decorator;

use Structural\Composite\Warrior;

abstract class WarriorDecorator implements Warrior
{
    protected Warrior $warrior;

    public function __construct(Warrior $warrior)
    {
        $this->warrior = $warrior;
    }

    public function getId(): int
    {
        return $this->warrior->getId();
    }

    public function display(): void
    {
        $this->warrior->display();
    }
}
