<?php
declare(strict_types=1);

namespace Behavioral\Command;

interface Warrior
{
    public function getId(): int;
    public function attack(): void;
    public function defend(): void;
}
