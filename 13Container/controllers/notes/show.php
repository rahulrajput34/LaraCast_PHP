<?php


use Core\App;
use Core\Database;

$db = App::resolve(\Core\Database::class);

$currentUserId = 1;
$id = $_GET['id'] ?? null;


$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $id
])->findOrFail();


authorize($note['user_id'] === $currentUserId);


view(
    'notes/show.view.php',
    [
        "heading" => "Note",
        "note" => $note
    ]
);
