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
        '/admin/artists' => [[['_route' => 'artists', '_controller' => 'App\\Controller\\ArtistController::index'], null, null, null, true, false, null]],
        '/admin/artists/create' => [[['_route' => 'artist_create', '_controller' => 'App\\Controller\\ArtistController::edit'], null, null, null, false, false, null]],
        '/admin/artists/add' => [[['_route' => 'app_artist_edit', '_controller' => 'App\\Controller\\ArtistController::edit'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'auth_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/generate_admin' => [[['_route' => 'auth_generate_admin', '_controller' => 'App\\Controller\\AuthController::generateAdmin'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'auth_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 't', '_controller' => 'App\\Controller\\HomeController::t'], null, null, null, false, false, null],
        ],
        '/top-leaks' => [[['_route' => 'top_leaks', '_controller' => 'App\\Controller\\HomeController::top_leaks'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\HomeController::admin'], null, null, null, false, false, null]],
        '/admin/labels' => [[['_route' => 'labels', '_controller' => 'App\\Controller\\LabelController::index'], null, null, null, true, false, null]],
        '/admin/labels/create' => [[['_route' => 'label_create', '_controller' => 'App\\Controller\\LabelController::edit'], null, null, null, false, false, null]],
        '/admin/labels/add' => [[['_route' => 'app_label_edit', '_controller' => 'App\\Controller\\LabelController::edit'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/admin/tape' => [[['_route' => 'tapes', '_controller' => 'App\\Controller\\TapeController::index'], null, null, null, false, false, null]],
        '/admin/tapes/create' => [[['_route' => 'tape_create', '_controller' => 'App\\Controller\\TapeController::edit'], null, null, null, false, false, null]],
        '/admin/tapes/add' => [[['_route' => 'app_tape_edit', '_controller' => 'App\\Controller\\TapeController::edit'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null]],
        '/users/create' => [[['_route' => 'users_create', '_controller' => 'App\\Controller\\UsersController::edit'], null, null, null, false, false, null]],
        '/users/add' => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|artists/(?'
                            .'|edit/([^/]++)(*:205)'
                            .'|suspend/([^/]++)(*:229)'
                            .'|unsuspend/([^/]++)(*:255)'
                            .'|archive/([^/]++)(*:279)'
                            .'|restore/([^/]++)(*:303)'
                        .')'
                        .'|labels/(?'
                            .'|edit/([^/]++)(*:335)'
                            .'|suspend/([^/]++)(*:359)'
                            .'|unsuspend/([^/]++)(*:385)'
                            .'|archive/([^/]++)(*:409)'
                            .'|restore/([^/]++)(*:433)'
                        .')'
                        .'|tapes/(?'
                            .'|edit/([^/]++)(*:464)'
                            .'|suspend/([^/]++)(*:488)'
                            .'|unsuspend/([^/]++)(*:514)'
                            .'|archive/([^/]++)(*:538)'
                            .'|restore/([^/]++)(*:562)'
                        .')'
                    .')'
                    .'|rtist/([^/]++)(*:586)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:631)'
                .'|/tape/view/([^/]++)(*:658)'
                .'|/users/(?'
                    .'|edit/([^/]++)(*:689)'
                    .'|suspend/([^/]++)(*:713)'
                    .'|unsuspend/([^/]++)(*:739)'
                    .'|archive/([^/]++)(*:763)'
                    .'|restore/([^/]++)(*:787)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        205 => [[['_route' => 'artist_edit', '_controller' => 'App\\Controller\\ArtistController::edit'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'artist_suspend', '_controller' => 'App\\Controller\\ArtistController::suspend'], ['id'], null, null, false, true, null]],
        255 => [[['_route' => 'artist_unsuspend', '_controller' => 'App\\Controller\\ArtistController::unsuspend'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'artist_archive', '_controller' => 'App\\Controller\\ArtistController::archive'], ['id'], null, null, false, true, null]],
        303 => [[['_route' => 'artist_restore', '_controller' => 'App\\Controller\\ArtistController::restore'], ['id'], null, null, false, true, null]],
        335 => [[['_route' => 'label_edit', '_controller' => 'App\\Controller\\LabelController::edit'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'label_suspend', '_controller' => 'App\\Controller\\LabelController::suspend'], ['id'], null, null, false, true, null]],
        385 => [[['_route' => 'label_unsuspend', '_controller' => 'App\\Controller\\LabelController::unsuspend'], ['id'], null, null, false, true, null]],
        409 => [[['_route' => 'label_archive', '_controller' => 'App\\Controller\\LabelController::archive'], ['id'], null, null, false, true, null]],
        433 => [[['_route' => 'label_restore', '_controller' => 'App\\Controller\\LabelController::restore'], ['id'], null, null, false, true, null]],
        464 => [[['_route' => 'tape_edit', '_controller' => 'App\\Controller\\TapeController::edit'], ['id'], null, null, false, true, null]],
        488 => [[['_route' => 'tape_suspend', '_controller' => 'App\\Controller\\TapeController::suspend'], ['id'], null, null, false, true, null]],
        514 => [[['_route' => 'tape_unsuspend', '_controller' => 'App\\Controller\\TapeController::unsuspend'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'tape_archive', '_controller' => 'App\\Controller\\TapeController::archive'], ['id'], null, null, false, true, null]],
        562 => [[['_route' => 'tape_restore', '_controller' => 'App\\Controller\\TapeController::restore'], ['id'], null, null, false, true, null]],
        586 => [[['_route' => 'view_artist', '_controller' => 'App\\Controller\\ArtistController::viewArtist'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        658 => [[['_route' => 'view_tape', '_controller' => 'App\\Controller\\TapeController::viewTape'], ['id'], null, null, false, true, null]],
        689 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], null, null, false, true, null]],
        713 => [[['_route' => 'users_suspend', '_controller' => 'App\\Controller\\UsersController::suspend'], ['id'], null, null, false, true, null]],
        739 => [[['_route' => 'users_unsuspend', '_controller' => 'App\\Controller\\UsersController::unsuspend'], ['id'], null, null, false, true, null]],
        763 => [[['_route' => 'users_archive', '_controller' => 'App\\Controller\\UsersController::archive'], ['id'], null, null, false, true, null]],
        787 => [
            [['_route' => 'users_restore', '_controller' => 'App\\Controller\\UsersController::restore'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
