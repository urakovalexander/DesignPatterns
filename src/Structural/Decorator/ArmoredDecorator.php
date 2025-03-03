<?php
declare(strict_types=1);

namespace Structural\Decorator;

class ArmoredDecorator extends WarriorDecorator
{
    public function display(): void
    {
        $this->warrior->display();
        echo " (Armored)";
    }
}
