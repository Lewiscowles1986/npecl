<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Helpers;

function ensureString(string|int|float|bool|array|null $value): string {
    if (!is_string($value)) {
        throw new \InvalidArgumentException('Expected a string');
    }
    return $value;
}

function ensureInt(string|int|float|bool|array|null $value): int {
    if (!is_int($value)) {
        throw new \InvalidArgumentException('Expected an integer');
    }
    return $value;
}

function ensureFloat(string|int|float|bool|array|null $value): float {
    if (!is_float($value)) {
        throw new \InvalidArgumentException('Expected a float');
    }
    return $value;
}

function ensureBool(string|int|float|bool|array|null $value): bool {
    if (!is_bool($value)) {
        throw new \InvalidArgumentException('Expected a boolean');
    }
    return $value;
}

function ensureArray(string|int|float|bool|array|null $value): array {
    if (!is_array($value)) {
        throw new \InvalidArgumentException('Expected an array');
    }
    return $value;
}
