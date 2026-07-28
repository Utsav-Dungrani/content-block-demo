<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Demo',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'NitsanAi\\Demo\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Utsav Dungrani',
    'author_email' => 'utsav.dungrani@mail.nitsan.ai',
    'author_company' => 'NITSAN AI',
    'version' => '1.0.0',
];
