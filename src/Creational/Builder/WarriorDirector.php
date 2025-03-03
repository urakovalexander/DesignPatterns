<?php
declare(strict_types=1);

namespace Creational\Builder;

class WarriorDirector
{
    private WarriorBuilder $builder;

    public function setBuilder(WarriorBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function constructBasicWarrior(): void
    {
        $this->builder->setName();
        $this->builder->buildWeapon();
        $this->builder->buildArmor();
        $this->builder->buildSpecialSkill();
    }
}
