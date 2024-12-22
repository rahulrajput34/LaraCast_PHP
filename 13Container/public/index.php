<?php


const BASE_PATH = __DIR__.'/../';
require BASE_PATH. "Core/functions.php"; 



spl_autoload_register(function($class){
    $class = str_replace("\\", '/', $class);
    require base_path("$class.php"); 
});


//TODO: we need to require it over here
require_once base_path('bootstrap.php'); 


$router = new \Core\Router();


$routes = require base_path("routes.php");


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$queryParams = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);


$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);





// TODO: Why we are using the container ??
// Here inside the code we can see all time we want the database that time we give the database configuration over there
// This might not be the good practice to write the code like this again and again
// To its better if we can do this task one time and through it inside the one container so whenever we want that time user it from there
// This is how container helps us




/*

==>TODO:  Relationship among bootstrap.php, App.php, and container.php:

bootstrap.php initializes and sets up all the dependencies or services.
These dependencies are stored in container.php, which acts as a central storage for managing them.
The App class in App.php provides methods to set the container (setContainer) and retrieve it (container).
Once the container is set in App, we can access any dependency or service globally using the App::container() method.

*/



// This is what is already provided by the framework like laravel
// But its good to know it



//  php -S localhost:3000 -t public