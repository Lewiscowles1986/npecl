<?php

namespace Lewiscowles\Npecl\ValueTypes;

class Priority
{
    private int $value;

    public function __construct(int $value)
    {
        if ($value < 0 || $value > 99) {
            throw new \InvalidArgumentException("Priority must be between 0 and 99.", $value);
        }
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
