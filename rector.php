<?php

use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassConst\AddTypeToConstRector;
use Rector\TypeDeclaration\Rector\Function_\AddFunctionVoidReturnTypeWhereNoReturnRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return RectorConfig::configure()
    ->withPhpSets()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        earlyReturn: true,
        strictBooleans: true,
        phpunitCodeQuality: true,
    )
    ->withRules([
        TypedPropertyFromStrictConstructorRector::class,
        AddFunctionVoidReturnTypeWhereNoReturnRector::class,
        AddTypeToConstRector::class
    ])
    ->withPaths([
        __DIR__.'/app/**',
        __DIR__.'/config/**',
        __DIR__.'/routes/**',
        __DIR__.'/storage/**',
        __DIR__.'/tests/**',
    ]);

