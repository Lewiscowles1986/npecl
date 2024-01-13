<?php

declare(strict_types=1);

use Lewiscowles\Npecl\ValueTypes\Priority;

it('throws an exception if not an integer within range', function($value) {
    expect(fn() => new Priority($value))->toThrow(
        new InvalidArgumentException('Priority must be between 0 and 99.')
    );
})->with([
    ['value' => 10000],
    ['value' => -1],
]);

it('has a getValue method to get the primitive-type value', function($value) {
    expect((new Priority($value))->getValue())->toEqual($value);
})->with([
    ['value' => 0],
    ['value' => 50],
    ['value' => 99],
]);
