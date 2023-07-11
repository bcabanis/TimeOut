<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/authentication' => [[['_route' => 'app_authentication', '_controller' => 'App\\Controller\\AuthenticationController::index'], null, null, null, false, false, null]],
        '/chat' => [[['_route' => 'app_chat', '_controller' => 'App\\Controller\\ChatController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, true, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, true, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/reset/password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
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
