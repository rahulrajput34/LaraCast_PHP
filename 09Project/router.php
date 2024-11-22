<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$queryParams = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

// TODO: here we are passing the note over here but still in the url http://localhost:3000/note?id=1 we  are able to get the value because after the ? its not the part of the route
$routes = [
    '/index.php' => '/controllers/index.php',
    '/09Project/controllers/index' => '/controllers/index.php',
    '/09Project/controllers/about' => '/controllers/about.php',
    '/09Project/controllers/notes' => '/controllers/notes.php',
    '/note' => '/controllers/note.php',
    '/09Project/controllers/contact' => '/controllers/contact.php',
];

// This function is the logic of the router
// It will get the controller route and then load the accroding php controller in it
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require __DIR__ . $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code)
{
    http_response_code($code);
    require __DIR__ . "/../views/{$code}.php";
    die();
}

routeToController($uri, $routes);
