<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'api_quote' => [[], ['_controller' => 'App\\Controller\\APIController::quote'], [], [['text', '/api/quote']], [], [], []],
    'api_deck' => [[], ['_controller' => 'App\\Controller\\APIController::getDeck'], [], [['text', '/api/deck']], [], [], []],
    'api_deck_shuffle' => [[], ['_controller' => 'App\\Controller\\APIController::shuffleDeck'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'api_deck_draw' => [[], ['_controller' => 'App\\Controller\\APIController::drawCard'], [], [['text', '/api/deck/draw']], [], [], []],
    'api_deck_draw_number' => [['number'], ['_controller' => 'App\\Controller\\APIController::drawMultipleCards'], [], [['variable', '/', '[^/]++', 'number', true], ['text', '/api/deck/draw']], [], [], []],
    'api_game_status' => [[], ['_controller' => 'App\\Controller\\APIController::gameStatus'], [], [['text', '/api/game']], [], [], []],
    'api_library_books' => [[], ['_controller' => 'App\\Controller\\APIController::getBooks'], [], [['text', '/api/library/books']], [], [], []],
    'api_library_book_by_isbn' => [['isbn'], ['_controller' => 'App\\Controller\\APIController::getBookByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'library_home' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/library']], [], [], []],
    'library_create_form' => [[], ['_controller' => 'App\\Controller\\BookController::createBookForm'], [], [['text', '/library/create']], [], [], []],
    'library_create' => [[], ['_controller' => 'App\\Controller\\BookController::createBook'], [], [['text', '/library/create']], [], [], []],
    'library_view_all' => [[], ['_controller' => 'App\\Controller\\BookController::viewAll'], [], [['text', '/library/view']], [], [], []],
    'library_view_one' => [['id'], ['_controller' => 'App\\Controller\\BookController::viewBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/view']], [], [], []],
    'library_edit' => [['id'], ['_controller' => 'App\\Controller\\BookController::editBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/edit']], [], [], []],
    'library_update' => [[], ['_controller' => 'App\\Controller\\BookController::updateBook'], [], [['text', '/library/update']], [], [], []],
    'library_delete' => [['id'], ['_controller' => 'App\\Controller\\BookController::deleteBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/delete']], [], [], []],
    'card' => [[], ['_controller' => 'App\\Controller\\CardController::home'], [], [['text', '/card']], [], [], []],
    'deck' => [[], ['_controller' => 'App\\Controller\\CardController::deck'], [], [['text', '/card/deck']], [], [], []],
    'shuffle' => [[], ['_controller' => 'App\\Controller\\CardController::shuffle'], [], [['text', '/shuffle']], [], [], []],
    'draw' => [[], ['_controller' => 'App\\Controller\\CardController::draw'], [], [['text', '/card/deck/draw']], [], [], []],
    'draw_number' => [[], ['_controller' => 'App\\Controller\\CardController::drawNumber'], [], [['text', '/card/deck/draw/number']], [], [], []],
    'session' => [[], ['_controller' => 'App\\Controller\\CardController::showSession'], [], [['text', '/session']], [], [], []],
    'session_delete' => [[], ['_controller' => 'App\\Controller\\CardController::deleteSession'], [], [['text', '/session/delete']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::number'], [], [['text', '/lucky']], [], [], []],
    'me' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::mePage'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::about'], [], [['text', '/about']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::report'], [], [['text', '/report']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::api'], [], [['text', '/api']], [], [], []],
    'game' => [[], ['_controller' => 'App\\Controller\\GameController::gameHome'], [], [['text', '/game']], [], [], []],
    'doc' => [[], ['_controller' => 'App\\Controller\\GameController::doc'], [], [['text', '/game/doc']], [], [], []],
    'game_play' => [[], ['_controller' => 'App\\Controller\\GameController::play'], [], [['text', '/game/play']], [], [], []],
    'game_draw_card' => [[], ['_controller' => 'App\\Controller\\GameController::drawCard'], [], [['text', '/game/draw-card']], [], [], []],
    'game_pass' => [[], ['_controller' => 'App\\Controller\\GameController::pass'], [], [['text', '/game/pass']], [], [], []],
    'game_restart' => [[], ['_controller' => 'App\\Controller\\GameController::restart'], [], [['text', '/game/restart']], [], [], []],
    'metrics' => [[], ['_controller' => 'App\\Controller\\MetricsController::metrics'], [], [['text', '/metrics']], [], [], []],
    'proj_home' => [[], ['_controller' => 'App\\Controller\\ProjectController::home'], [], [['text', '/proj']], [], [], []],
    'proj_about' => [[], ['_controller' => 'App\\Controller\\ProjectController::about'], [], [['text', '/proj/about']], [], [], []],
    'proj_goals' => [[], ['_controller' => 'App\\Controller\\ProjectController::indicators'], [], [['text', '/proj/goals']], [], [], []],
    'proj_data' => [[], ['_controller' => 'App\\Controller\\ProjectController::data'], [], [['text', '/data']], [], [], []],
    'App\Controller\APIController::quote' => [[], ['_controller' => 'App\\Controller\\APIController::quote'], [], [['text', '/api/quote']], [], [], []],
    'App\Controller\APIController::getDeck' => [[], ['_controller' => 'App\\Controller\\APIController::getDeck'], [], [['text', '/api/deck']], [], [], []],
    'App\Controller\APIController::shuffleDeck' => [[], ['_controller' => 'App\\Controller\\APIController::shuffleDeck'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'App\Controller\APIController::drawCard' => [[], ['_controller' => 'App\\Controller\\APIController::drawCard'], [], [['text', '/api/deck/draw']], [], [], []],
    'App\Controller\APIController::drawMultipleCards' => [['number'], ['_controller' => 'App\\Controller\\APIController::drawMultipleCards'], [], [['variable', '/', '[^/]++', 'number', true], ['text', '/api/deck/draw']], [], [], []],
    'App\Controller\APIController::gameStatus' => [[], ['_controller' => 'App\\Controller\\APIController::gameStatus'], [], [['text', '/api/game']], [], [], []],
    'App\Controller\APIController::getBooks' => [[], ['_controller' => 'App\\Controller\\APIController::getBooks'], [], [['text', '/api/library/books']], [], [], []],
    'App\Controller\APIController::getBookByIsbn' => [['isbn'], ['_controller' => 'App\\Controller\\APIController::getBookByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'App\Controller\BookController::index' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/library']], [], [], []],
    'App\Controller\BookController::createBookForm' => [[], ['_controller' => 'App\\Controller\\BookController::createBookForm'], [], [['text', '/library/create']], [], [], []],
    'App\Controller\BookController::createBook' => [[], ['_controller' => 'App\\Controller\\BookController::createBook'], [], [['text', '/library/create']], [], [], []],
    'App\Controller\BookController::viewAll' => [[], ['_controller' => 'App\\Controller\\BookController::viewAll'], [], [['text', '/library/view']], [], [], []],
    'App\Controller\BookController::viewBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::viewBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/view']], [], [], []],
    'App\Controller\BookController::editBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::editBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/edit']], [], [], []],
    'App\Controller\BookController::updateBook' => [[], ['_controller' => 'App\\Controller\\BookController::updateBook'], [], [['text', '/library/update']], [], [], []],
    'App\Controller\BookController::deleteBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::deleteBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/delete']], [], [], []],
    'App\Controller\CardController::home' => [[], ['_controller' => 'App\\Controller\\CardController::home'], [], [['text', '/card']], [], [], []],
    'App\Controller\CardController::deck' => [[], ['_controller' => 'App\\Controller\\CardController::deck'], [], [['text', '/card/deck']], [], [], []],
    'App\Controller\CardController::shuffle' => [[], ['_controller' => 'App\\Controller\\CardController::shuffle'], [], [['text', '/shuffle']], [], [], []],
    'App\Controller\CardController::draw' => [[], ['_controller' => 'App\\Controller\\CardController::draw'], [], [['text', '/card/deck/draw']], [], [], []],
    'App\Controller\CardController::drawNumber' => [[], ['_controller' => 'App\\Controller\\CardController::drawNumber'], [], [['text', '/card/deck/draw/number']], [], [], []],
    'App\Controller\CardController::showSession' => [[], ['_controller' => 'App\\Controller\\CardController::showSession'], [], [['text', '/session']], [], [], []],
    'App\Controller\CardController::deleteSession' => [[], ['_controller' => 'App\\Controller\\CardController::deleteSession'], [], [['text', '/session/delete']], [], [], []],
    'App\Controller\ControllerTwig::number' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::number'], [], [['text', '/lucky']], [], [], []],
    'App\Controller\ControllerTwig::mePage' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::mePage'], [], [['text', '/']], [], [], []],
    'App\Controller\ControllerTwig::about' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::about'], [], [['text', '/about']], [], [], []],
    'App\Controller\ControllerTwig::report' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::report'], [], [['text', '/report']], [], [], []],
    'App\Controller\ControllerTwig::api' => [[], ['_controller' => 'App\\Controller\\ControllerTwig::api'], [], [['text', '/api']], [], [], []],
    'App\Controller\GameController::gameHome' => [[], ['_controller' => 'App\\Controller\\GameController::gameHome'], [], [['text', '/game']], [], [], []],
    'App\Controller\GameController::doc' => [[], ['_controller' => 'App\\Controller\\GameController::doc'], [], [['text', '/game/doc']], [], [], []],
    'App\Controller\GameController::play' => [[], ['_controller' => 'App\\Controller\\GameController::play'], [], [['text', '/game/play']], [], [], []],
    'App\Controller\GameController::drawCard' => [[], ['_controller' => 'App\\Controller\\GameController::drawCard'], [], [['text', '/game/draw-card']], [], [], []],
    'App\Controller\GameController::pass' => [[], ['_controller' => 'App\\Controller\\GameController::pass'], [], [['text', '/game/pass']], [], [], []],
    'App\Controller\GameController::restart' => [[], ['_controller' => 'App\\Controller\\GameController::restart'], [], [['text', '/game/restart']], [], [], []],
    'App\Controller\MetricsController::metrics' => [[], ['_controller' => 'App\\Controller\\MetricsController::metrics'], [], [['text', '/metrics']], [], [], []],
    'App\Controller\ProjectController::home' => [[], ['_controller' => 'App\\Controller\\ProjectController::home'], [], [['text', '/proj']], [], [], []],
    'App\Controller\ProjectController::about' => [[], ['_controller' => 'App\\Controller\\ProjectController::about'], [], [['text', '/proj/about']], [], [], []],
    'App\Controller\ProjectController::indicators' => [[], ['_controller' => 'App\\Controller\\ProjectController::indicators'], [], [['text', '/proj/goals']], [], [], []],
    'App\Controller\ProjectController::data' => [[], ['_controller' => 'App\\Controller\\ProjectController::data'], [], [['text', '/data']], [], [], []],
];