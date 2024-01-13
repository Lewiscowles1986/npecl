<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Dtos;

class PackageDefinition
{
    public function __construct(
        private string $name,
        private string $constraint
    ) {}

    public function getName(): string { return $this->name; }
    public function getConstraint(): string { return $this->constraint; }
}
