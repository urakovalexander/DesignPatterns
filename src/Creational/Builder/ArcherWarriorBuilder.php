<?php
declare(strict_types=1);

namespace Creational\Builder;

class ArcherWarriorBuilder implements WarriorBuilder
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
        $this->warrior->setName("Archer");
    }

    public function buildWeapon(): void
    {
        $this->warrior->setWeapon("Bow and arrows");
    }

    public function buildArmor(): void
    {
        $this->warrior->setArmor("Light armor");
    }

    public function buildSpecialSkill(): void
    {
        $this->warrior->setSpecialSkill("Headshot");
    }

    public function getWarrior(): Warrior
    {
        $result = $this->warrior;
        $this->reset();
        return $result;
    }
}
