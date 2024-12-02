<?php


const BASE_PATH = __DIR__.'/../';
require BASE_PATH. "Core/functions.php"; 


spl_autoload_register(function($class){
    $class = str_replace("\\", '/', $class);
    require base_path("$class.php"); 
});


$router = new \Core\Router();


$routes = require base_path("routes.php");


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$queryParams = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);


$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);





//  php -S localhost:3000 -t public