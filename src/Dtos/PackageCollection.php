<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Dtos;

class PackageCollection
{
    /** @var PackageDefinition[] */
    private array $packages;

    public function __construct(PackageDefinition ...$packages)
    {
        $this->packages = $packages;
    }

    /**
     * @return PackageDefinition[]
     */
    public function getPackages(): array
    {
        return $this->packages;
    }

    public function isEmpty(): bool
    {
        return count($this->packages) == 0;
    }
}
