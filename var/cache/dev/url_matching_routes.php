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
        '/api/quote' => [[['_route' => 'api_quote', '_controller' => 'App\\Controller\\APIController::quote'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck' => [[['_route' => 'api_deck', '_controller' => 'App\\Controller\\APIController::getDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api_deck_shuffle', '_controller' => 'App\\Controller\\APIController::shuffleDeck'], null, ['POST' => 0], null, false, false, null]],
        '/api/deck/draw' => [[['_route' => 'api_deck_draw', '_controller' => 'App\\Controller\\APIController::drawCard'], null, ['POST' => 0], null, false, false, null]],
        '/api/game' => [[['_route' => 'api_game_status', '_controller' => 'App\\Controller\\APIController::gameStatus'], null, ['GET' => 0], null, false, false, null]],
        '/api/library/books' => [[['_route' => 'api_library_books', '_controller' => 'App\\Controller\\APIController::getBooks'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'library_home', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/library/create' => [
            [['_route' => 'library_create_form', '_controller' => 'App\\Controller\\BookController::createBookForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'library_create', '_controller' => 'App\\Controller\\BookController::createBook'], null, ['POST' => 0], null, false, false, null],
        ],
        '/library/view' => [[['_route' => 'library_view_all', '_controller' => 'App\\Controller\\BookController::viewAll'], null, null, null, false, false, null]],
        '/library/update' => [[['_route' => 'library_update', '_controller' => 'App\\Controller\\BookController::updateBook'], null, ['POST' => 0], null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardController::home'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\CardController::deck'], null, null, null, false, false, null]],
        '/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\CardController::shuffle'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\CardController::draw'], null, null, null, false, false, null]],
        '/card/deck/draw/number' => [[['_route' => 'draw_number', '_controller' => 'App\\Controller\\CardController::drawNumber'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session', '_controller' => 'App\\Controller\\CardController::showSession'], null, null, null, false, false, null]],
        '/session/delete' => [[['_route' => 'session_delete', '_controller' => 'App\\Controller\\CardController::deleteSession'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\ControllerTwig::number'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'me', '_controller' => 'App\\Controller\\ControllerTwig::mePage'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ControllerTwig::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\ControllerTwig::report'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ControllerTwig::api'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\GameController::gameHome'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\GameController::doc'], null, null, null, false, false, null]],
        '/game/play' => [[['_route' => 'game_play', '_controller' => 'App\\Controller\\GameController::play'], null, null, null, false, false, null]],
        '/game/draw-card' => [[['_route' => 'game_draw_card', '_controller' => 'App\\Controller\\GameController::drawCard'], null, null, null, false, false, null]],
        '/game/pass' => [[['_route' => 'game_pass', '_controller' => 'App\\Controller\\GameController::pass'], null, null, null, false, false, null]],
        '/game/restart' => [[['_route' => 'game_restart', '_controller' => 'App\\Controller\\GameController::restart'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\MetricsController::metrics'], null, null, null, false, false, null]],
        '/proj' => [[['_route' => 'proj_home', '_controller' => 'App\\Controller\\ProjectController::home'], null, null, null, false, false, null]],
        '/proj/about' => [[['_route' => 'proj_about', '_controller' => 'App\\Controller\\ProjectController::about'], null, null, null, false, false, null]],
        '/proj/goals' => [[['_route' => 'proj_goals', '_controller' => 'App\\Controller\\ProjectController::indicators'], null, null, null, false, false, null]],
        '/data' => [[['_route' => 'proj_data', '_controller' => 'App\\Controller\\ProjectController::data'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/api/(?'
                    .'|deck/draw/([^/]++)(*:228)'
                    .'|library/book/([^/]++)(*:257)'
                .')'
                .'|/library/(?'
                    .'|view/([^/]++)(*:291)'
                    .'|edit/([^/]++)(*:312)'
                    .'|delete/([^/]++)(*:335)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        228 => [[['_route' => 'api_deck_draw_number', '_controller' => 'App\\Controller\\APIController::drawMultipleCards'], ['number'], ['POST' => 0], null, false, true, null]],
        257 => [[['_route' => 'api_library_book_by_isbn', '_controller' => 'App\\Controller\\APIController::getBookByIsbn'], ['isbn'], null, null, false, true, null]],
        291 => [[['_route' => 'library_view_one', '_controller' => 'App\\Controller\\BookController::viewBook'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'library_edit', '_controller' => 'App\\Controller\\BookController::editBook'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [
            [['_route' => 'library_delete', '_controller' => 'App\\Controller\\BookController::deleteBook'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
