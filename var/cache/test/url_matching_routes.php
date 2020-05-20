<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'news_index', '_controller' => 'App\\Controller\\NewsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/news/([^/]++)(*:21)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [
            [['_route' => 'news_item', '_controller' => 'App\\Controller\\NewsController::item'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
