<?php

declare(strict_types=1);

namespace Creational\Factory;

class WarriorFactory
{
    public function createWarrior(string $type): Warrior
    {
        return match ($type) {
            'archer' => new Archer(),
            'mage' => new Mage(),
            'knight' => new Knight(),
            default => throw new \InvalidArgumentException("Unknown warrior type: $type"),
        };
    }
}
