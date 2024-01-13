<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Dtos;

enum License: string {
    case XDEBUG = 'Xdebug-1.03';
    case UNKNOWN = 'unknown';
    // Add other licenses as necessary
}