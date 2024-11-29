<?php
$config = require base_path('config.php');
$db = new Database($config['database']);


// $heading = "Note";
$currentUserId = 1;
$id = $_GET['id'] ?? null;


$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $id
])->findOrFail();


authorize($note['user_id'] === $currentUserId);


// require __DIR__ . "/../../views/notes/show.view.php";
view('notes/show.view.php',[
    "heading" => "Note",
    "note" => $note
]
);
