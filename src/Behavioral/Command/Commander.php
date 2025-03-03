<?php
declare(strict_types=1);

namespace Behavioral\Command;

class Commander
{
    /** @var Command[] */
    private array $commands = [];

    public function setCommand(Command $command): void
    {
        $this->commands[] = $command;
    }

    public function executeCommands(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
        $this->commands = [];
    }
}
