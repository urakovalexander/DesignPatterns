<?php
declare(strict_types=1);

namespace Behavioral\Command;

interface Command
{
    public function execute(): void;
}
