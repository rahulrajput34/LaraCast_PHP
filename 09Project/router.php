<?php
$routes = require __DIR__ . "/routes.php"; 


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$queryParams = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);


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
