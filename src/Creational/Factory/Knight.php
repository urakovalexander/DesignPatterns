<?php

declare(strict_types=1);

namespace Creational\Factory;

class Knight implements Warrior
{
    public function attack(): string
    {
        return "Hits with a sword";
    }

    public function getDescription(): string
    {
        return "Knight";
    }
}