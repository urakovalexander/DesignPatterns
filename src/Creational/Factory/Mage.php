<?php

declare(strict_types=1);

namespace Creational\Factory;

class Mage implements Warrior
{
    public function attack(): string
    {
        return "Casts a fireball";
    }

    public function getDescription(): string
    {
        return "Mage";
    }
}