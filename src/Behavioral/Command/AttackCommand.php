<?php
declare(strict_types=1);

namespace Behavioral\Command;

class AttackCommand implements Command
{
    private Warrior $warrior;

    public function __construct(Warrior $warrior)
    {
        $this->warrior = $warrior;
    }

    public function execute(): void
    {
        $this->warrior->attack();
    }
}
