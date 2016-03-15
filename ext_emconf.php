<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'TCA control',
    'description' => 'Override or change TCA definition',
    'category' => 'plugin',
    'version' => '0.0.1',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Udo Leimberger',
    'author_email' => 'udo@t3developer.de',
    'author_company' => 't3developer',
    'constraints' => array(
        'depends' => array(
            'php' => '5.3.7-0.0.0',
            'typo3' => '7.2.0-7.9.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
