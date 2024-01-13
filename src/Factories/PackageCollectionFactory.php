<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Factories;

use Lewiscowles\Npecl\Dtos\PackageCollection;
use Lewiscowles\Npecl\Dtos\PackageDefinition;

class PackageCollectionFactory
{
    /**
     * Creates a PackageCollection object from an array of package data.
     *
     * @param array $packagesArray An array of package data, where each item is an array with 'name' and 'constraint' keys.
     * @return PackageCollection The constructed PackageCollection object.
     */
    public static function create(array $packagesArray): PackageCollection
    {
        $packages = [];

        foreach ($packagesArray as $key => $value) {
            $packages[] = new PackageDefinition($key, $value);
        }

        return new PackageCollection(...$packages);
    }
}
