<?php

/**
 * Extension Manager/Repository config file for ext "consentmanager".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'consentmanager',
    'description' => 'desc',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Jolution\\Consentmanager\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jolution',
    'author_email' => 'info@jolution.de',
    'author_company' => 'Jolution',
    'version' => '1.0.0',
];
