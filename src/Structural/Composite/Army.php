<?php
declare(strict_types=1);

namespace Structural\Composite;

class Army implements Warrior
{
    private static int $counter = 0;
    private int $id;

    private array $children = [];

    public function __construct()
    {
        $this->id = ++self::$counter;
        echo "Army #$this->id created!\n";
    }

    public function getId(): int
    {
        return $this->id;
    }

    private function getDisplayName(Warrior $component): string
    {
        $shortName = (new \ReflectionClass($component))->getShortName();

        return $shortName . " #" . $component->getId();
    }
    public function add(Warrior $component): void
    {
        $this->children[] = $component;
        $displayName = $this->getDisplayName($component);
        echo "$displayName added in Army #$this->id.\n";
    }


    public function display(): void
    {
        echo "\n(Army #$this->id):\n";
        foreach ($this->children as $child) {
            $child->display();
        }
    }
}
