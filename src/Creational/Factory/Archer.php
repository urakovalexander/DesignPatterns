<?php

declare(strict_types=1);

namespace Creational\Factory;

class Archer implements Warrior
{
    public function attack(): string
    {
        return "Shot an arrow";
    }

    public function getDescription(): string
    {
        return "Archer";
    }
}