<?php


use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


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
