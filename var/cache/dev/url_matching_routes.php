<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/categories' => [
            [['_route' => 'app_dashboard_categories', '_controller' => 'App\\Controller\\DashboardController::categories'], null, null, null, false, false, null],
            [['_route' => 'app_event_categories', '_controller' => 'App\\Controller\\EventController::categories'], null, ['GET' => 0], null, false, false, null],
        ],
        '/mestags' => [[['_route' => 'app_dashboard_mestags', '_controller' => 'App\\Controller\\DashboardController::mestags'], null, null, null, false, false, null]],
        '/event/affichage' => [[['_route' => 'app_event_affichage', '_controller' => 'App\\Controller\\EventController::AfficheEvent'], null, null, null, false, false, null]],
        '/event/mesevents' => [[['_route' => 'app_event_mesevents', '_controller' => 'App\\Controller\\EventController::mesevents'], null, null, null, false, false, null]],
        '/event/to_bdd' => [[['_route' => 'app_event_bdd', '_controller' => 'App\\Controller\\EventController::EventToBDD'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/homepresentation' => [[['_route' => 'app_home_presentation', '_controller' => 'App\\Controller\\HomeController::presentation'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, true, false, null]],
        '/login/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/login/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\LoginController::profil'], null, null, null, false, false, null]],
        '/login/avatar' => [[['_route' => 'app_login_avatar', '_controller' => 'App\\Controller\\LoginController::avatar'], null, null, null, false, false, null]],
        '/login/tags' => [[['_route' => 'app_tags', '_controller' => 'App\\Controller\\LoginController::tags'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'app_event_calendar', '_controller' => 'App\\Controller\\EventController::calendar'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/event/([^/]++)(?'
                    .'|(*:60)'
                    .'|/post_chat_message(*:85)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['eventId'], null, null, false, true, null]],
        85 => [
            [['_route' => 'app_event_post_chat_message', '_controller' => 'App\\Controller\\EventController::postChatMessage'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
