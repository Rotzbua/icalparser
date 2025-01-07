<?php
// https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/master/doc/config.rst

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->name('*.php')
    ->name('*.phpt') // Test files.
;

$config = (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect()) // Enable multicore.
;
$rules  = [
    '@PHP82Migration'       => true, // Must be the same as the min PHP version.
    '@PHP56Migration:risky' => true,
];

return $config->setRules($rules)->setFinder($finder);
