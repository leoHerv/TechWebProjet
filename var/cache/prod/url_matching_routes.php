<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::indexAction'], null, null, null, false, false, null]],
        '/sandbox/overview' => [[['_route' => 'sandbox_overview', '_controller' => 'App\\Controller\\Sandbox\\OverviewController::indexAction'], null, null, null, false, false, null]],
        '/sandbox/overview/hello2' => [[['_route' => 'sandbox_overview_hello2', '_controller' => 'App\\Controller\\Sandbox\\OverviewController::hello2Action'], null, null, null, false, false, null]],
        '/sandbox/overview/hello3' => [[['_route' => 'sandbox_overview_hello3', '_controller' => 'App\\Controller\\Sandbox\\OverviewController::hello3Action'], null, null, null, false, false, null]],
        '/sandbox/overview/hello4' => [[['_route' => 'sandbox_overview_hello4', '_controller' => 'App\\Controller\\Sandbox\\OverviewController::hello4Action'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
