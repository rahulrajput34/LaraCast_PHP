<?php
// TODO: SQL injection and vulnerable SQL code
require __DIR__ . "/functions.php"; 

// require __DIR__ . "/router.php"; 
require __DIR__ . "/Database.php"; 

$config = require __DIR__ . "/config.php"; 
$db = new Database($config['database']);

// It will give the value of the whatever passed in the url after /?
// like if the url is http://localhost:3000/index.php/?id=1 then it would give the assositive array which has id
// Then we get the id like this below
// dd($_GET['id']);
$id = $_GET['id'];

// But in the real world we are not going to hardCode the value of id like this
// TODO: We can do it like this But We never ever do it like this
// Becasue from here we are giving the kind of the permision to the user to write the query in the url
// So he can do whatever he want with table
// So we can not do it in this way
// $query = "select * from posts where id = {$id}";

// Here's another way of doing this
// So here we are giving doing that when the id is something
// We bind the query and the whatever we got from the url into two sperate boats and then use it

// for that we give the ? over here
// We gave the param into the query method of the Database class
// Pass that param into the execute statement
// $query = "select * from posts where id = ?";

// second way is we pass not the question mark  instead we pass the name
// : is optional
$query = "select * from posts where id = :id";

// We pass it like this becuase Now its become assosiative array
$posts = $db->query($query, [':id' => $id])-> fetch();
dd($posts);