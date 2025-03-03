<?php
declare(strict_types=1);

namespace Creational\Builder;

class KnightWarriorBuilder implements WarriorBuilder
{
    private Warrior $warrior;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->warrior = new Warrior();
    }

    public function setName(): void
    {
        $this->warrior->setName("Knight");
    }

    public function buildWeapon(): void
    {
        $this->warrior->setWeapon("Sword");
    }

    public function buildArmor(): void
    {
        $this->warrior->setArmor("Heavy armor");
    }

    public function buildSpecialSkill(): void
    {
        $this->warrior->setSpecialSkill("Shield attack");
    }

    public function getWarrior(): Warrior
    {
        $result = $this->warrior;
        $this->reset();
        return $result;
    }
}
