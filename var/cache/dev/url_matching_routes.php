<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chat' => [[['_route' => 'chat_channel', '_controller' => 'App\\Controller\\ChatController::getChannels'], null, null, null, false, false, null]],
        '/message' => [[['_route' => 'message', '_controller' => 'App\\Controller\\ChatController::sendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/new_channel' => [[['_route' => 'app_channel_new', '_controller' => 'App\\Controller\\ChatController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::modifierImage'], null, null, null, true, false, null]],
        '/profil/image/supprimer' => [[['_route' => 'app_supprimer_image', '_controller' => 'App\\Controller\\ProfilController::deleteImage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/chat/([^/]++)(*:21)'
                .'|/user/([^/]++)(?'
                    .'|/edit(*:50)'
                    .'|(*:57)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:93)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'chat', '_controller' => 'App\\Controller\\ChatController::chat'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        93 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
