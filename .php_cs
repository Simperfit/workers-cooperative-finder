<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'general_phpdoc_annotation_remove' => ['param', 'return'],
        'strict_comparison' => true,
        'strict_param' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'array_syntax' => ['syntax' => 'short'],
        'list_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        '@PSR2' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
        ->exclude(['app', 'bin', 'scripts', 'var', 'vendor', 'web'])
        ->in(__DIR__)
    )
;
