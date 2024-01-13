<?php
declare(strict_types=1);

use Lewiscowles\Npecl\Dtos\ExtensionConfig;
use Lewiscowles\Npecl\Factories\ExtensionConfigFactory;
use Lewiscowles\Npecl\Dtos\Type;
use Lewiscowles\Npecl\Dtos\License;
use Lewiscowles\Npecl\Dtos\PackageCollection;
use Lewiscowles\Npecl\Dtos\PhpExtConfig;

describe("given example from Derickr google doc", function() {
    beforeEach(fn() => $this->extensionConfig = ExtensionConfigFactory::create([
        "name" => "ext-xdebug",
        "type" => "php-ext",
        "license" => "Xdebug-1.03",
        "description" => "Xdebug is an amazing tool...",
        "require" => [
            "ext-zlib" => "*",
            "php" => ">=7.4.21,<8.4"
        ],
        "conflict" => [
            "ext-zetalib" => "*"
        ],
        "php-ext" => [
            "priority" => 90,
            "config" => [
                "enable-xdebug-dev" => false,
                "without-xdebug-compression" => false
            ]
        ]
    ]));

    it('has created an instance', function () {
        expect($this->extensionConfig)->toBeInstanceOf(ExtensionConfig::class);
    });

    it('has assigned the correct name', function() {
        expect($this->extensionConfig->getName())->toEqual('ext-xdebug');
    });

    it('has assigned the correct type', function() {
        expect($this->extensionConfig->getType())->toEqual(Type::PHP_EXT);
    });

    it('has assigned the correct license', function() {
        expect($this->extensionConfig->getLicense())->toEqual(License::XDEBUG);
    });

    it('has assigned the correct description', function() {
        expect($this->extensionConfig->getDescription())->toEqual('Xdebug is an amazing tool...');
    });

    it('has an expected container class for requirements', function() {
        expect($this->extensionConfig->getRequires())->toBeInstanceOf(PackageCollection::class);
    });

    it('has a non-empty requirements container as expected from example', function() {
        expect($this->extensionConfig->getRequires()->isEmpty())->toBeFalse();
    });

    it('has requirements container with correct number of packages', function() {
        expect($this->extensionConfig->getRequires()->getPackages())->toHaveLength(2);
    });

    it('has an expected container class for conflicts', function() {
        expect($this->extensionConfig->getConflicts())->toBeInstanceOf(PackageCollection::class);
    });

    it('has non-empty conflicts container as expected from example', function() {
        expect($this->extensionConfig->getConflicts()->isEmpty())->toBeFalse();
    });

    it('has conflicts container with correct number of packages', function() {
        expect($this->extensionConfig->getConflicts()->getPackages())->toHaveLength(1);
    });
    
    it('has expected php-extension config class for "tweaks"', function() {
        expect($this->extensionConfig->getPhpExtConfig())->toBeInstanceOf(PhpExtConfig::class);
    });
});


describe("example with only name and description", function() {
    beforeEach(fn() => $this->extensionConfig = ExtensionConfigFactory::create([
        "name" => "ext-bare-bones",
        "description" => "This extension is intentionally not well!",
    ]));

    it('has created an instance', function () {
        expect($this->extensionConfig)->toBeInstanceOf(ExtensionConfig::class);
    });

    it('has assigned the correct name', function() {
        expect($this->extensionConfig->getName())->toEqual('ext-bare-bones');
    });

    it('has assigned invalid type, due to missing config value', function() {
        expect($this->extensionConfig->getType())->toEqual(Type::INVALID);
    });

    it('has assigned unknown license, due to missing config value', function() {
        expect($this->extensionConfig->getLicense())->toEqual(License::UNKNOWN);
    });

    it('has assigned the correct description', function() {
        expect($this->extensionConfig->getDescription())->toEqual('This extension is intentionally not well!');
    });

    it('has an expected container class for requirements', function() {
        expect($this->extensionConfig->getRequires())->toBeInstanceOf(PackageCollection::class);
    });

    it('has a empty requirements container as expected from example', function() {
        expect($this->extensionConfig->getRequires()->isEmpty())->toBeTrue();
    });

    it('has requirements container with correct number of packages', function() {
        expect($this->extensionConfig->getRequires()->getPackages())->toBeEmpty();
    });

    it('has an expected container class for conflicts', function() {
        expect($this->extensionConfig->getConflicts())->toBeInstanceOf(PackageCollection::class);
    });

    it('has empty conflicts container as expected from example', function() {
        expect($this->extensionConfig->getConflicts()->isEmpty())->toBeTrue();
    });

    it('has conflicts container with correct number of packages', function() {
        expect($this->extensionConfig->getConflicts()->getPackages())->toBeEmpty();
    });
    
    it('has expected php-extension config class for "tweaks"', function() {
        expect($this->extensionConfig->getPhpExtConfig())->toBeInstanceOf(PhpExtConfig::class);
    });
});

describe("example with only name, description and invalid license and type values", function() {
    beforeEach(fn() => $this->extensionConfig = ExtensionConfigFactory::create([
        "name" => "ext-jabberwocky",
        "type" => "jabberwocky",
        "license" => "jabberwocky",
        "description" => "Some mad misconfigured extension",
    ]));

    it('has created an instance', function () {
        expect($this->extensionConfig)->toBeInstanceOf(ExtensionConfig::class);
    });

    it('has assigned the correct name', function() {
        expect($this->extensionConfig->getName())->toEqual('ext-jabberwocky');
    });

    it('has assigned invalid type, due to missing config value', function() {
        expect($this->extensionConfig->getType())->toEqual(Type::INVALID);
    });

    it('has assigned unknown license, due to missing config value', function() {
        expect($this->extensionConfig->getLicense())->toEqual(License::UNKNOWN);
    });

    it('has assigned the correct description', function() {
        expect($this->extensionConfig->getDescription())->toEqual('Some mad misconfigured extension');
    });

    it('has an expected container class for requirements', function() {
        expect($this->extensionConfig->getRequires())->toBeInstanceOf(PackageCollection::class);
    });

    it('has a empty requirements container as expected from example', function() {
        expect($this->extensionConfig->getRequires()->isEmpty())->toBeTrue();
    });

    it('has requirements container with correct number of packages', function() {
        expect($this->extensionConfig->getRequires()->getPackages())->toBeEmpty();
    });

    it('has an expected container class for conflicts', function() {
        expect($this->extensionConfig->getConflicts())->toBeInstanceOf(PackageCollection::class);
    });

    it('has empty conflicts container as expected from example', function() {
        expect($this->extensionConfig->getConflicts()->isEmpty())->toBeTrue();
    });

    it('has conflicts container with correct number of packages', function() {
        expect($this->extensionConfig->getConflicts()->getPackages())->toBeEmpty();
    });
    
    it('has expected php-extension config class for "tweaks"', function() {
        expect($this->extensionConfig->getPhpExtConfig())->toBeInstanceOf(PhpExtConfig::class);
    });
});