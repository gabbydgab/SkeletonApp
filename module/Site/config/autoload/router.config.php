<?php

return [
    "dependencies" =>  [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => [
            Site\Page\HomePage::class   => Site\Factory\PageFactory::class
        ],
    ],
    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => Site\Page\HomePage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];
