<?php

use Core\App;
use Core\Container;
use Core\Database;


$container = new Container();


// TODO: put it the data inside the container using the bind method
// Here we gonna put the database logic which are executing multiple times
$container->bind('Core\Database', function(){


    // got it from notes inside the controllers
    $config = require base_path('config.php');
    return new Database($config['database']);

});



// TODO: get the data from the container using the resolve method
// $db = $container->resolve('Core\Database');


// This is where we get the exception inside the resolve method
// $db = $container->resolve('fwfwfwwfw');




// set the container inside the App.php
App::setContainer($container);