<?php
declare(strict_types=1);

namespace Creational\Builder;

class Warrior
{
    private string $name = '';
    private string $weapon = '';
    private string $armor = '';
    private string $specialSkill = '';

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setWeapon(string $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function setArmor(string $armor): void
    {
        $this->armor = $armor;
    }

    public function setSpecialSkill(string $specialSkill): void
    {
        $this->specialSkill = $specialSkill;
    }

    public function showSpecifications(): void
    {
        echo "Warrior: {$this->name}" . PHP_EOL;
        echo "Weapons: {$this->weapon}" . PHP_EOL;
        echo "Armour: {$this->armor}" . PHP_EOL;
        echo "Special skill: {$this->specialSkill}" . PHP_EOL;
    }
}
