<?php

use Core\App;
use Core\Database;


// $config = require base_path('config.php');
// $db = new Database($config['database']);

// $db = App::container()->resolve('Core\Database');
// $db = App::container()->resolve(\Core\Database::class);

// after creating the new resolve and bind static methods inside the App class
$db = App::resolve(\Core\Database::class);


$currentUserId = 1;
$id = $_POST['id'] ?? null;



$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $id
])->findOrFail();
authorize($note['user_id'] === $currentUserId);


$pressedDeleteOnId = $_POST['id'];
$db->query('DELETE FROM notes WHERE id= :id', [
    'id' => $pressedDeleteOnId
]);


header('location: /notes');
die();
