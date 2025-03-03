<?php
declare(strict_types=1);

namespace Structural\Proxy;

use Structural\Composite\Knight;
use Structural\Composite\Warrior;

class RealKnight extends Knight implements Warrior
{

}