<?php


$EM_CONF[$_EXTKEY] = [
    'title' => 'Replace ß with ss for swiss language',
    'description' => 'Replace ß which is highly useful for content fallbacks',
    'category' => 'frontend',
    'author' => 'Georg Ringer',
    'author_email' => 'gr@studiomitte.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.1.2',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '9.5.9-12.9.99'
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];