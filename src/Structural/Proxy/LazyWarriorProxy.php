<?php
declare(strict_types=1);

namespace Structural\Proxy;

use Structural\Composite\Warrior;

class LazyWarriorProxy implements Warrior
{
    private ?Warrior $realWarrior = null;
    private \Closure $initializer;


    public function __construct(\Closure $initializer)
    {
        $this->initializer = $initializer;
    }

    private function getRealWarrior(): Warrior
    {
        if ($this->realWarrior === null) {
            $this->realWarrior = ($this->initializer)();
        }
        return $this->realWarrior;
    }

    public function display(): void
    {
        $this->getRealWarrior()->display();
    }

    public function getId(): int
    {
        return $this->getRealWarrior()->getId();
    }
}
