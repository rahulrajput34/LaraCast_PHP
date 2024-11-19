<?php
// to get the current URL of the page
// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo $uri;
$uri = ($_SERVER['REQUEST_URI']);
// echo '<br>';
// echo $uri;
// dd($uri);

// In-build function to get the default url
// dd(parse_url($uri));

// TODO: The first focuses only on the path, while the second includes the full request URL
// So its better to use the first one

// // Routes based on the URI
// if ($uri == "/index.php") {
//     require __DIR__ . "/controllers/index.php"; 
// } else if ($uri == "/04Router/controllers/index") {
//     require __DIR__ . "/controllers/index.php"; 
// } else if ($uri == "/04Router/controllers/about") {
//     require __DIR__ . "/controllers/about.php"; 
// }  else if ($uri == "/04Router/controllers/contact") {
//     require __DIR__ . "/controllers/contact.php"; 
// }else {
//     echo "Page not found";
// }

//TODO: What is difference between require 'functions.php'; and require __DIR__ . "/functions.php";
//'functions.php', If you run your script from a different folder, PHP might not find functions.php because it looks for it in the wrong place.
// require __DIR__ . "/functions.php"; is always find functions.php in the same folder as the script you're working in, no matter where or how the script is run.

//TODO: Open This filer only and then run it for perfect routing


// Now, store it inside the routes
$routes = [
    '/index.php' => '/controllers/index.php',
    '/04Router/controllers/index' => '/controllers/index.php',
    '/04Router/controllers/about' => '/controllers/about.php',
    '/04Router/controllers/contact' => '/controllers/contact.php'
];


//TODO:  Check if the uri is present inside the routes
// if present then give the below file
// if not then show the error page
function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require __DIR__ . $routes[$uri]; 
    } else{
        abort(404);
    }
}

// Now store it inside the function and give default 404
function abort($code){
    http_response_code($code = 404);
    require __DIR__ . "../views/{$code}.php";
    die();
}


routeToController($uri, $routes);