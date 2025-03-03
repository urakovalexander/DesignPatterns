<?php

declare(strict_types=1);

namespace Creational\Factory;

interface Warrior
{
    public function attack(): string;
    public function getDescription(): string;
}