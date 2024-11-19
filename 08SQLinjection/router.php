<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = ($_SERVER['REQUEST_URI']);

$routes = [
    '/index.php' => '/controllers/index.php',
    '/08SQLinjection/controllers/index' => '/controllers/index.php',
    '/08SQLinjection/controllers/about' => '/controllers/about.php',
    '/08SQLinjection/controllers/contact' => '/controllers/contact.php'
];


function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require __DIR__ . $routes[$uri]; 
    } else{
        abort(404);
    }
}

function abort($code){
    http_response_code($code = 404);
    require __DIR__ . "../views/{$code}.php";
    die();
}


routeToController($uri, $routes);