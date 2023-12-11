<?php
// https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/master/doc/config.rst

$config = new PhpCsFixer\Config();
$rules  = [
//        '@PER-CS2.0'             => true, // Very strict.
//        '@PSR12'             => true, // Very strict.
//        '@PER'             => true, // Very strict.
//        '@Symfony'             => true, // Very strict.
    //    '@PhpCsFixer'             => false, // Very strict.
//    '@PHP54Migration'             => true, // Must be the same as the min PHP version.
//    '@PHP70Migration'             => true, // Must be the same as the min PHP version.
//    '@PHP71Migration'             => true, // Must be the same as the min PHP version.
//    '@PHP73Migration'             => true, // Must be the same as the min PHP version.
//    '@PHP74Migration'             => true, // Must be the same as the min PHP version.
    '@PHP80Migration'             => true, // Must be the same as the min PHP version.
//    '@PHP81Migration'             => true, // Must be the same as the min PHP version.
//    'list_syntax'                 => false,
//    'visibility_required'         => false,
//    'trailing_comma_in_multiline' => false,
    //    'global_namespace_import' => ['import_classes' => true, 'import_constants' => false, 'import_functions' => true],
    // Do not enable by default. These rules require review!! (but they are useful)
//     '@PhpCsFixer:risky'     => true,
//     '@PHP74Migration:risky' => true,
//     '@PHP80Migration:risky' => true,
];

return $config->setRules($rules);
