<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Dtos;

enum Type: string {
    case PHP_EXT = 'php-ext';
    case PHP_EXT_ZEND = 'php-ext-zend';
    case INVALID = 'invalid';
}
