<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'accueil_index', '_controller' => 'App\\Controller\\AccueilController::indexAction'], null, null, null, false, false, null],
            [['_route' => 'anonyme_acceuil', '_controller' => 'App\\Controller\\AnonymeController::accueilAction'], null, null, null, false, false, null],
        ],
        '/addProduct' => [[['_route' => 'admin_addProduct', '_controller' => 'App\\Controller\\AdminController::addProductAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'anonyme_login', '_controller' => 'App\\Controller\\AnonymeController::loginAction'], null, null, null, false, false, null]],
        '/signIn' => [[['_route' => 'anonyme_signIn', '_controller' => 'App\\Controller\\AnonymeController::signInAction'], null, null, null, false, false, null]],
        '/editUsers' => [[['_route' => 'super_admin_editUsers', '_controller' => 'App\\Controller\\SuperAdminController::editUsersAction'], null, null, null, false, false, null]],
        '/addAdmin' => [[['_route' => 'super_admin_addAdmin', '_controller' => 'App\\Controller\\SuperAdminController::addAdminAction'], null, null, null, false, false, null]],
        '/edit' => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::editAction'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'user_panier', '_controller' => 'App\\Controller\\UserController::panierAction'], null, null, null, false, false, null]],
        '/listProduct' => [[['_route' => 'user_listProduct', '_controller' => 'App\\Controller\\UserController::listProductAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
