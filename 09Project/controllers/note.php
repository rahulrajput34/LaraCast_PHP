<?php
// TODO: here we also need to hardcode the database like this because we want to use it
$config = require __DIR__ . '/../config.php';
$db = new Database($config['database']);

$heading = "Note";

// get the id from url
$id = $_GET['id'] ?? null;
// dd($id);

// here we are sying that select the note which has the id of :id and then store the value of above in it by $id
$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id])->fetch();


require __DIR__ . "/../views/note.view.php";


