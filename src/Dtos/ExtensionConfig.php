<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Dtos;

class ExtensionConfig
{
    public function __construct(
        private string $name,
        private Type $type,
        private License $license,
        private string $description,
        private PackageCollection $require,
        private PackageCollection $conflict,
        private PhpExtConfig $phpExt
    ) {}

    public function getName(): string { return $this->name; }
    public function getType(): Type { return $this->type; }
    public function getLicense(): License { return $this->license; }
    public function getDescription(): string { return $this->description; }
    public function getRequires(): PackageCollection { return $this->require; }
    public function getConflicts(): PackageCollection { return $this->conflict; }
    public function getPhpExtConfig(): PhpExtConfig { return $this->phpExt; }
}
