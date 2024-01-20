<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\ValueTypes;

class Priority
{
    private int $value;

    public function __construct(int $value)
    {
        if ($value < 1 || $value > 99) {
            throw new \InvalidArgumentException("Priority must be between 1 and 99.", $value);
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return str_pad("{$this->value}", 2, '0', STR_PAD_LEFT);
    }
}
