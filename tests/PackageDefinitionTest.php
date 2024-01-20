<?php
declare(strict_types=1);

use Lewiscowles\Npecl\Dtos\PackageDefinition;

it(
    'instantiates an object with matching name and constraint to its input values',
    function($name, $constraint) {
        $packageDef = new PackageDefinition($name, $constraint);
        expect($packageDef->getName())->toEqual($name);
        expect($packageDef->getConstraint())->toEqual($constraint);
    }
)->with([
    ['name' => 'php', 'constraint' => '*'],
]);
