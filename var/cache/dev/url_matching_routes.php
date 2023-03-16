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
        '/' => [[['_route' => 'accueil_index', '_controller' => 'App\\Controller\\AccueilController::indexAction'], null, null, null, false, false, null]],
        '/magasin/add' => [[['_route' => 'magasin_add', '_controller' => 'App\\Controller\\MagasinController::addAction'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::indexAction'], null, null, null, false, false, null]],
        '/produit/add' => [[['_route' => 'produit_add', '_controller' => 'App\\Controller\\ProduitController::addAction'], null, null, null, false, false, null]],
        '/produit/pays/add' => [[['_route' => 'produit_pays_add', '_controller' => 'App\\Controller\\ProduitController::paysAddAction'], null, null, null, false, false, null]],
        '/produit/magasin/add' => [[['_route' => 'produit_magasin_add', '_controller' => 'App\\Controller\\ProduitController::magasinAddAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/list' => [[['_route' => 'sandbox_doctrine_list', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::listAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/ajouterendur' => [[['_route' => 'sandbox_doctrine_ajouterendur', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::ajouterendurAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/modifierendur' => [[['_route' => 'sandbox_doctrine_modifierendur', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::modifierendurAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/effacerendur' => [[['_route' => 'sandbox_doctrine_effacerendur', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::effacerendurAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/critique/ajouterendur' => [[['_route' => 'sandbox_doctrine_critique_ajouterendur', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::critiqueAjouterendurAction'], null, null, null, false, false, null]],
        '/sandbox/form/film/validator' => [[['_route' => 'sandbox_form_film_validator', '_controller' => 'App\\Controller\\Sandbox\\FormController::filmValidatorAction'], null, null, null, false, false, null]],
        '/sandbox/form/film/add' => [[['_route' => 'sandbox_form_film_add', '_controller' => 'App\\Controller\\Sandbox\\FormController::filmAddAction'], null, null, null, false, false, null]],
        '/sandbox/form/critique/add' => [[['_route' => 'sandbox_form_critique_add', '_controller' => 'App\\Controller\\Sandbox\\FormController::critiqueAddAction'], null, null, null, false, false, null]],
        '/sandbox/form/personne' => [[['_route' => 'sandbox_form_personne', '_controller' => 'App\\Controller\\Sandbox\\FormController::personneAction'], null, null, null, false, false, null]],
        '/sandbox/form/profil' => [[['_route' => 'sandbox_form_profil', '_controller' => 'App\\Controller\\Sandbox\\FormController::profilAction'], null, null, null, false, false, null]],
        '/sandbox/injection/un' => [[['_route' => 'sandbox_injection_un', '_controller' => 'App\\Controller\\Sandbox\\InjectionController::unAction'], null, null, null, false, false, null]],
        '/sandbox/injection/deux' => [[['_route' => 'sandbox_injection_deux', '_controller' => 'App\\Controller\\Sandbox\\InjectionController::deuxAction'], null, null, null, false, false, null]],
        '/sandbox/injection/create-flash' => [[['_route' => 'sandbox_injection_create_flash', '_controller' => 'App\\Controller\\Sandbox\\InjectionController::createFlashAction'], null, null, null, false, false, null]],
        '/sandbox/injection/display-flash' => [[['_route' => 'sandbox_injection_display_flash', '_controller' => 'App\\Controller\\Sandbox\\InjectionController::displayFlashAction'], null, null, null, false, false, null]],
        '/sandbox/overview' => [[['_route' => 'sandbox_overview', '_controller' => 'App\\Controller\\Sandbox\\OverviewController::indexAction'], null, null, null, false, false, null]],
        '/sandbox/overview/hello2' => [[['_route' => 'sandbox_overview_hello2', '_controller' => 'App\\Controller\\Sandbox\\OverviewController::hello2Action'], null, null, null, false, false, null]],
        '/sandbox/overview/hello3' => [[['_route' => 'sandbox_overview_hello3', '_controller' => 'App\\Controller\\Sandbox\\OverviewController::hello3Action'], null, null, null, false, false, null]],
        '/sandbox/overview/hello4' => [[['_route' => 'sandbox_overview_hello4', '_controller' => 'App\\Controller\\Sandbox\\OverviewController::hello4Action'], null, null, null, false, false, null]],
        '/sandbox/prefix' => [[['_route' => 'sandbox_prefix', '_controller' => 'App\\Controller\\Sandbox\\PrefixController::indexAction'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello2' => [[['_route' => 'sandbox_prefix_hello2', '_controller' => 'App\\Controller\\Sandbox\\PrefixController::hello2Action'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello3' => [[['_route' => 'sandbox_prefix_hello3', '_controller' => 'App\\Controller\\Sandbox\\PrefixController::hello3Action'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello4' => [[['_route' => 'sandbox_prefix_hello4', '_controller' => 'App\\Controller\\Sandbox\\PrefixController::hello4Action'], null, null, null, false, false, null]],
        '/sandbox/route/redirect1' => [[['_route' => 'sandbox_route_redirect1', '_controller' => 'App\\Controller\\Sandbox\\RouteController::redirect1Action'], null, null, null, false, false, null]],
        '/sandbox/route/redirect2' => [[['_route' => 'sandbox_route_redirect2', '_controller' => 'App\\Controller\\Sandbox\\RouteController::redirect2Action'], null, null, null, false, false, null]],
        '/sandbox/route/redirect3' => [[['_route' => 'sandbox_route_redirect3', '_controller' => 'App\\Controller\\Sandbox\\RouteController::redirect3Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue1' => [[['_route' => 'sandbox_twig_vue1', '_controller' => 'App\\Controller\\Sandbox\\TwigController::vue1Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue2' => [[['_route' => 'sandbox_twig_vue2', '_controller' => 'App\\Controller\\Sandbox\\TwigController::vue2Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue3' => [[['_route' => 'sandbox_twig_vue3', '_controller' => 'App\\Controller\\Sandbox\\TwigController::vue3Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue4' => [[['_route' => 'sandbox_twig_vue4', '_controller' => 'App\\Controller\\Sandbox\\TwigController::vue4Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue5' => [[['_route' => 'sandbox_twig_vue5', '_controller' => 'App\\Controller\\Sandbox\\TwigController::vue5Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue6' => [[['_route' => 'sandbox_twig_vue6', '_controller' => 'App\\Controller\\Sandbox\\TwigController::vue6Action'], null, null, null, false, false, null]],
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
                .'|/magasin/(?'
                    .'|valeur\\-stock/([1-9]\\d*)(*:205)'
                    .'|stock/([1-9]\\d*)(?:/(0|[1-9]\\d*)(?:/(-1|0|[1-9]\\d*))?)?(*:268)'
                .')'
                .'|/produit/(?'
                    .'|list(?:/([1-9]\\d*))?(*:309)'
                    .'|view(?'
                        .'|/([1-9]\\d*)(*:335)'
                        .'|QB/([1-9]\\d*)/(avec|sans)(*:368)'
                    .')'
                    .'|edit/([1-9]\\d*)(*:392)'
                    .'|delete/([1-9]\\d*)(*:417)'
                .')'
                .'|/sandbox/(?'
                    .'|doctrine/(?'
                        .'|view/([1-9]\\d*)(*:465)'
                        .'|delete/([1-9]\\d*)(*:490)'
                        .'|critique/view(?'
                            .'|1/([1-9]\\d*)(*:526)'
                            .'|2/([1-9]\\d*)(*:546)'
                        .')'
                    .')'
                    .'|form/(?'
                        .'|film/edit(?'
                            .'|/([1-9]\\d*)(*:587)'
                            .'|bis/([1-9]\\d*)(*:609)'
                        .')'
                        .'|note(?:/([1-9]\\d*))?(*:638)'
                    .')'
                    .'|route/(?'
                        .'|with\\-(?'
                            .'|variable/([^/]++)(*:682)'
                            .'|default(?:/([^/]++))?(*:711)'
                            .'|constraint(?:/(0|[1-9]\\d*))?(*:747)'
                        .')'
                        .'|test(?'
                            .'|1/([^/]++)/([^/]++)/([^/\\.]++)\\.([^/]++)(*:803)'
                            .'|2/([1-9]\\d{0,3})/((?:0?[1-9])|(?:1[0-2]))/([-a-zA-Z]+)\\.(jpg|jpeg|png|ppm)(*:885)'
                            .'|3/([1-9]\\d{0,3})/((?:0?[1-9])|(?:1[0-2]))/([-a-zA-Z]+)(?:\\.(jpg|jpeg|png|ppm))?(*:972)'
                            .'|4/(?'
                                .'|([1-9]\\d{0,3})(?:/((?:0?[1-9])|(?:1[0-2]))(?:/([-a-zA-Z]+)(?:\\.(jpg|jpeg|png|ppm))?)?)?(*:1072)'
                                .'|([1-9]\\d{0,3})(*:1095)'
                            .')'
                        .')'
                        .'|permis/(\\d+)(*:1118)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        205 => [[['_route' => 'magasin_valeur_stock', '_controller' => 'App\\Controller\\MagasinController::valeurStockAction'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'magasin_stock', 'valinf' => 0, 'valsup' => -1, '_controller' => 'App\\Controller\\MagasinController::stockAction'], ['id', 'valinf', 'valsup'], null, null, false, true, null]],
        309 => [[['_route' => 'produit_list', 'page' => 0, '_controller' => 'App\\Controller\\ProduitController::listAction'], ['page'], null, null, false, true, null]],
        335 => [[['_route' => 'produit_view', '_controller' => 'App\\Controller\\ProduitController::viewAction'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'produit_view_qb', '_controller' => 'App\\Controller\\ProduitController::viewQB'], ['id', 'method'], null, null, false, true, null]],
        392 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::editAction'], ['id'], null, null, false, true, null]],
        417 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::deleteAction'], ['id'], null, null, false, true, null]],
        465 => [[['_route' => 'sandbox_doctrine_view', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::viewAction'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'sandbox_doctrine_delete', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::deleteAction'], ['id'], null, null, false, true, null]],
        526 => [[['_route' => 'sandbox_doctrine_critique_view1', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::critiqueView1Action'], ['id'], null, null, false, true, null]],
        546 => [[['_route' => 'sandbox_doctrine_critique_view2', '_controller' => 'App\\Controller\\Sandbox\\DoctrineController::critiqueView2Action'], ['id'], null, null, false, true, null]],
        587 => [[['_route' => 'sandbox_form_film_edit', '_controller' => 'App\\Controller\\Sandbox\\FormController::filmEditAction'], ['id'], null, null, false, true, null]],
        609 => [[['_route' => 'sandbox_form_film_editbis', '_controller' => 'App\\Controller\\Sandbox\\FormController::filmEditbisAction'], ['id'], null, null, false, true, null]],
        638 => [[['_route' => 'sandbox_form_note', 'max' => 20, '_controller' => 'App\\Controller\\Sandbox\\FormController::noteAction'], ['max'], null, null, false, true, null]],
        682 => [[['_route' => 'sandbox_route_with_variable', '_controller' => 'App\\Controller\\Sandbox\\RouteController::withVariableAction'], ['age'], null, null, false, true, null]],
        711 => [[['_route' => 'sandbox_route_with_default', 'age' => 18, '_controller' => 'App\\Controller\\Sandbox\\RouteController::withDefaultAction'], ['age'], null, null, false, true, null]],
        747 => [[['_route' => 'sandbox_route_with_constraint', 'age' => 18, '_controller' => 'App\\Controller\\Sandbox\\RouteController::withConstraintAction'], ['age'], null, null, false, true, null]],
        803 => [[['_route' => 'sandbox_route_test1', '_controller' => 'App\\Controller\\Sandbox\\RouteController::test1Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        885 => [[['_route' => 'sandbox_route_test2', '_controller' => 'App\\Controller\\Sandbox\\RouteController::test2Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        972 => [[['_route' => 'sandbox_route_test3', 'ext' => 'png', '_controller' => 'App\\Controller\\Sandbox\\RouteController::test3Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        1072 => [[['_route' => 'sandbox_route_test4', 'month' => 1, 'filename' => 'picture', 'ext' => 'png', '_controller' => 'App\\Controller\\Sandbox\\RouteController::test4Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        1095 => [[['_route' => 'sandbox_route_test4bis', '_controller' => 'App\\Controller\\Sandbox\\RouteController::test4bisAction'], ['year'], null, null, false, true, null]],
        1118 => [
            [['_route' => 'sandbox_route_permis', '_controller' => 'App\\Controller\\Sandbox\\RouteController::permisAction'], ['age'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
