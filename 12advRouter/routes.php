<?php
// TODO: make router which know the req type



// return [
//     '/' => '/controllers/index.php',
//     '/index' => '/controllers/index.php',
//     '/about' => '/controllers/about.php',
//     '/notes' => '/controllers/notes/index.php',
//     '/note' => '/controllers/notes/show.php',
//     '/notes/create' => '/controllers/notes/create.php',
//     '/contact' => '/controllers/contact.php'
// ];




//TODO:  We can do it like below for all
/*
[
    [
        'uri' => '/',
        'controller' =>'/controllers/index.php',
        'method' => 'GET'
    ]
]
*/



//TODO:  but we want more authenticate so we change the router class and use method over here
// We are going to use the router class and give store all the values inside the routes
$router->get('/', '/controllers/index.php');
$router->get('/index', '/controllers/index.php');
$router->get('/about', '/controllers/about.php');
$router->get('/notes', '/controllers/notes/index.php');
$router->get('/note', '/controllers/notes/show.php');
$router->get('/notes/create', '/controllers/notes/create.php');
$router->get('/contact', '/controllers/contact.php');







