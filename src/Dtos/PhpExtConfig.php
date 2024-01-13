<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Dtos;

use Lewiscowles\Npecl\ValueTypes\Priority;

class PhpExtConfig
{
    public function __construct(
        private Priority $priority,
        private PhpExtConfigOptions $config
    ) {}

    public function getPriority(): Priority { return $this->priority; }
    public function getConfig(): PhpExtConfigOptions { return $this->config; }
}
