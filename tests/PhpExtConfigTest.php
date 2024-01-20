<?php
declare(strict_types=1);

use Lewiscowles\Npecl\Dtos\PhpExtConfig;
use Lewiscowles\Npecl\ValueTypes\Priority;
use Lewiscowles\Npecl\Dtos\PhpExtConfigOptions;

describe("given example from Derickr google doc", function() {
    beforeEach(function() {
        $this->priority = 90;
        $this->configOptions = [
            "enable-xdebug-dev" => false,
            "without-xdebug-compression" => false,
        ];
        $this->configDef = new PhpExtConfig(
            new Priority($this->priority),
            new PhpExtConfigOptions($this->configOptions)
        );
    });

    it('instantiates the correct object type', function() {
        expect($this->configDef)->toBeInstanceOf(PhpExtConfig::class);
    });

    it('has a priority class, with expected value', function() {
        expect($this->configDef->getPriority())->toBeInstanceOf(Priority::class);
        expect($this->configDef->getPriority()->getValue())->toEqual($this->priority);
    });

    it('has config with expected instance type', function() {
        expect($this->configDef->getConfig())->toBeInstanceOf(PhpExtConfigOptions::class);
    });

    it('has config with options matching input', function() {
        expect($this->configDef->getConfig()->getAllOptions())->toEqual($this->configOptions);
        expect($this->configDef->getConfig()->getOption("enable-xdebug-dev"))->toEqual(false);
        expect($this->configDef->getConfig()->getOption("without-xdebug-compression"))->toEqual(false);
    });

    it('responds with null if getOption is used for an option which does not exist', function() {
        expect($this->configDef->getConfig()->getOption("jabberwocky"))->toBeNull();
    });
});
