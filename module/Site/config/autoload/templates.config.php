<?php

$templates   = __DIR__ . "/../../templates";

return [
    'templates' => [
        'layout'    => 'layout/default',
        'map'       => [
            'layout/default'                    => $templates . '/layout/site.phtml',
            'layout/dashboard'                  => $templates . '/layout/dashboard.phtml',
            'template/footer'                   => $templates . '/layout/partial/footer.phtml',
            'template/navigation/sidebar'       => $templates . '/layout/template/navigation/sidebar.phtml',
            'template/navigation/header'        => $templates . '/layout/template/navigation/header.phtml',
            'template/navigation/breadcrumbs'   => $templates . '/layout/template/navigation/breadcrumbs.phtml',
            'partial/navigation/header'         => $templates . '/layout/partial/navigation/header.phtml',
            'partial/navigation/sidebar'        => $templates . '/layout/partial/navigation/sidebar.phtml',
            'partial/navigation/breadcrumbs'    => $templates . '/layout/partial/navigation/breadcrumbs.phtml',
            'error/error'                       => $templates . '/error/error.phtml',
            'error/404'                         => $templates . '/error/404.phtml'
        ],
        'paths' => [
            'error'      => [__DIR__ . '/../../templates/error'],
            'page'      => [__DIR__ . '/../../templates/page']
        ],
    ],
    'view_helpers' => [
        'factories'     => [],
        'invokables'    => [],
        'aliases'       => []
    ]
];
