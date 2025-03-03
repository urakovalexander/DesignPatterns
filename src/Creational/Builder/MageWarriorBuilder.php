<?php
declare(strict_types=1);

namespace Creational\Builder;

class MageWarriorBuilder implements WarriorBuilder
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
        $this->warrior->setName("Mage");
    }

    public function buildWeapon(): void
    {
        $this->warrior->setWeapon("Magic staff");
    }

    public function buildArmor(): void
    {
        $this->warrior->setArmor("Robe");
    }

    public function buildSpecialSkill(): void
    {
        $this->warrior->setSpecialSkill("Fireball");
    }

    public function getWarrior(): Warrior
    {
        $result = $this->warrior;
        $this->reset();
        return $result;
    }
}
