<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Dtos;

class PhpExtConfigOptions
{
    private array $options;

    public function __construct(array $options)
    {
        $this->options = $options;
    }

    public function getOption(string $key): string|int|float|bool|array|null
    {
        return $this->options[$key] ?? null;
    }

    public function getAllOptions(): array
    {
        return $this->options;
    }
}
