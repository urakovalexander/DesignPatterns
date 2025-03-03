<?php
declare(strict_types=1);

namespace Structural\Composite;

interface Warrior
{
    public function display(): void;

    public function getId(): int;
}
