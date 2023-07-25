<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/mainboard' => [[['_route' => 'app_dashboard_mainboard', '_controller' => 'App\\Controller\\DashboardController::categories'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, true, false, null]],
        '/event/mestags' => [[['_route' => 'app_event_mestags', '_controller' => 'App\\Controller\\EventController::mestags'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, true, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/registration-success' => [[['_route' => 'registration_success', '_controller' => 'App\\Controller\\RegistrationController::register_success'], null, null, null, false, false, null]],
        '/registration-error' => [[['_route' => 'registration_error', '_controller' => 'App\\Controller\\RegistrationController::register_error'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/participer' => [[['_route' => 'app_participer', '_controller' => 'App\\Controller\\TestController::participer'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'app_event_categories', '_controller' => 'App\\Controller\\EventController::categories'], null, ['GET' => 0], null, false, false, null]],
        '/calendar' => [[['_route' => 'app_event_calendar', '_controller' => 'App\\Controller\\EventController::calendar'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
