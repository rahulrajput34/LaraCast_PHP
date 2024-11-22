<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$queryParams = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

$routes = [
    '/index.php' => '/controllers/index.php',
    '/09Project/controllers/index' => '/controllers/index.php',
    '/09Project/controllers/about' => '/controllers/about.php',
    '/09Project/controllers/notes' => '/controllers/notes.php',
    '/note' => '/controllers/note.php',
    '/09Project/controllers/contact' => '/controllers/contact.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require __DIR__ . $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code = 404){
    http_response_code($code);
    require __DIR__ . "../views/{$code}.php";
    die();
}

routeToController($uri, $routes);
