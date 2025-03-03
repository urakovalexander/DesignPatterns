<?php
declare(strict_types=1);

namespace Creational\Builder;

interface WarriorBuilder
{
    public function reset(): void;
    public function setName(): void;
    public function buildWeapon(): void;
    public function buildArmor(): void;
    public function buildSpecialSkill(): void;
    public function getWarrior(): Warrior;
}
