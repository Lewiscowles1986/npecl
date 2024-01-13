<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Factories;

use Lewiscowles\Npecl\Dtos\ExtensionConfig;
use Lewiscowles\Npecl\Dtos\PackageCollection;
use Lewiscowles\Npecl\Dtos\PhpExtConfig;
use Lewiscowles\Npecl\ValueTypes\Priority;
use Lewiscowles\Npecl\Dtos\PhpExtConfigOptions;
use Lewiscowles\Npecl\Dtos\License;
use Lewiscowles\Npecl\Dtos\Type;

class ExtensionConfigFactory
{
    /**
     * Creates an ExtensionConfig object from an array.
     *
     * @param array{
     *      name: string,
     *      type?: string,
     *      license?: string,
     *      description: string,
     *      require?: array,
     *      conflict?: array,
     *      php-ext?: array{
     *          priority: int,
     *          config: array
     *      }
     * } $data The input data.
     * 
     * @return ExtensionConfig The constructed ExtensionConfig object.
     */
    public static function create(array $data): ExtensionConfig
    {
        // Convert enums, create sub-objects, and handle other logic as needed
        $type = Type::tryFrom($data['type'] ?? 'invalid') ?? Type::INVALID;
        $license = License::tryFrom($data['license'] ?? 'unknown') ?? License::UNKNOWN;
        $require = PackageCollectionFactory::create($data['require'] ?? []);
        $conflict = PackageCollectionFactory::create($data['conflict'] ?? []);

        $phpExtConfig = new PhpExtConfig(
            (
                (isset($data['php-ext']) && is_array($data['php-ext'])) ?
                new Priority($data['php-ext']['priority']) :
                new Priority(20)
            ),
            (
                (isset($data['php-ext']) && is_array($data['php-ext'])) ?
                new PhpExtConfigOptions($data['php-ext']['config']) :
                new PhpExtConfigOptions([])
            )
        );

        return new ExtensionConfig(
            $data['name'],
            $type,
            $license,
            $data['description'],
            $require,
            $conflict,
            $phpExtConfig
        );
    }
}
