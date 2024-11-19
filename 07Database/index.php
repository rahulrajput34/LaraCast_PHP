<?php
// TODO: The task of this class is to make the Database code more flexible and readibale
require __DIR__ . "/functions.php"; 

// require __DIR__ . "/router.php"; 
require __DIR__ . "/Database.php"; 

// From passing over here we get the solution but there is also a problem we are hardQuoting it over here as well
// So we also passing the above to solve this problem
// $config = [
//     'host' => 'localhost',
//     'port' => 3306,
//     'dbname' => 'myapp',
//     'charset' => 'utf8mb4'
// ];

$config = require __DIR__ . "/config.php"; 

$db = new Database($config['database']);

// This :: is called scope reselution operator
// That gives us the access of the static or contant define on the class
// After using this we give the method as a capitle letter just to clear that we are using the contant over here
$posts = $db->query("select * from posts")-> fetch();
dd($posts);