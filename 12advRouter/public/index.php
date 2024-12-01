<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH. "Core/functions.php"; 



spl_autoload_register(function($class){
    $class = str_replace("\\", '/', $class);
    require base_path("$class.php"); 
});



// require base_path("Core/router.php");
// Because we create the router class that we initialize the object over here
$router = new \Core\Router();



// Getting from the router.php
// TODO: for creating all the object values here
$routes = require base_path("routes.php");



$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$queryParams = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);



// Make this method inside the class
// routeToController($uri, $routes);



// if the manually given method exits go with it else use the REQUEST_METHOD
// To get the particular route when click
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
// pass these params to the method of the router class
$router->route($uri, $method);





//  php -S localhost:3000 -t public
// TODO: first we gonna make the router so that it know which req its responding to weather its a get, post or whatever
// for that we created the router class and define all the req type in it
// we use these methods in the routes.php and import it over here because we give the instance over here
// From this instance it will store inside the routes of the class which is protected
// Then whenever user want any route that time it will execute the route function above and get the param from here and goes to method of the router class
// then its proceed according to req
// if not then its gives the 404
