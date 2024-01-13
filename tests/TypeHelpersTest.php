<?php
declare(strict_types=1);

use function Lewiscowles\Npecl\Helpers\{ensureString, ensureInt, ensureFloat, ensureBool, ensureArray};

it('ensures string values correctly', function ($value, $expected) {
    if ($expected instanceof Exception) {
        expect(fn() => ensureString($value))->toThrow(get_class($expected));
    } else {
        expect(ensureString($value))->toBe($expected);
    }
})->with([
    ['string', 'string'],
    [123, new InvalidArgumentException('Expected a string')],
    [true, new InvalidArgumentException('Expected a string')],
    // Add more test cases as needed
]);

it('ensures integer values correctly', function ($value, $expected) {
    if ($expected instanceof Exception) {
        expect(fn() => ensureInt($value))->toThrow(get_class($expected));
    } else {
        expect(ensureInt($value))->toBe($expected);
    }
})->with([
    [123, 123],
    ['string', new InvalidArgumentException('Expected an integer')],
    [1.23, new InvalidArgumentException('Expected an integer')],
    // Add more test cases as needed
]);

it('ensures float values correctly', function ($value, $expected) {
    if ($expected instanceof Exception) {
        expect(fn() => ensureFloat($value))->toThrow(get_class($expected));
    } else {
        expect(ensureFloat($value))->toBe($expected);
    }
})->with([
    [1.23, 1.23],
    ['string', new InvalidArgumentException('Expected a float')],
    [123, new InvalidArgumentException('Expected a float')],
    [true, new InvalidArgumentException('Expected a float')],
    // Add more test cases as needed
]);

it('ensures boolean values correctly', function ($value, $expected) {
    if ($expected instanceof Exception) {
        expect(fn() => ensureBool($value))->toThrow(get_class($expected));
    } else {
        expect(ensureBool($value))->toBe($expected);
    }
})->with([
    [true, true],
    [false, false],
    ['string', new InvalidArgumentException('Expected a boolean')],
    [123, new InvalidArgumentException('Expected a boolean')],
    [1.23, new InvalidArgumentException('Expected a boolean')],
    // Add more test cases as needed
]);

it('ensures array values correctly', function ($value, $expected) {
    if ($expected instanceof Exception) {
        expect(fn() => ensureArray($value))->toThrow(get_class($expected));
    } else {
        expect(ensureArray($value))->toBe($expected);
    }
})->with([
    [[1, 2, 3], [1, 2, 3]],
    ['string', new InvalidArgumentException('Expected an array')],
    [123, new InvalidArgumentException('Expected an array')],
    [true, new InvalidArgumentException('Expected an array')],
    // Add more test cases as needed
]);

