<?php
declare(strict_types=1);

namespace Structural\Decorator;

class EnchantedDecorator extends WarriorDecorator
{
    public function display(): void
    {
        $this->warrior->display();
        echo " (Enchanted)";
    }
}
