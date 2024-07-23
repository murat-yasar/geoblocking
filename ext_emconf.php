<?php

/**
 * Extension Manager/Repository config file for ext "geoblocking".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'geoblocking',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Muratyasar\\Geoblocking\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Murat Yaşar',
    'author_email' => 'dev.muratyasar@gmail.com',
    'author_company' => 'MuratYasar',
    'version' => '1.0.0',
];
