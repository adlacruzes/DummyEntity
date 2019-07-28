<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'trailing_comma_in_multiline_array' => true,
        'phpdoc_separation' => false,
        'method_chaining_indentation' => true,
        'multiline_whitespace_before_semicolons' => true,
        'phpdoc_align' => false,
        'logical_operators' => true,
        'modernize_types_casting' => true,
        'random_api_migration' => true,
        'list_syntax' => ['syntax' => 'short'],
        'is_null' => true,
        'declare_strict_types' => true
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/src')
            ->in(__DIR__ . '/test')
    );
