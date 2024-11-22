<?php
$config = require __DIR__ . '/../config.php';
$db = new Database($config['database']);


$heading = "Note";
$currentUserId = 1;
$id = $_GET['id'] ?? null;


// TODO: if there a way to combine these query and !$note
// $note = $db->query('SELECT * FROM notes WHERE id = :id', [
//     'id' => $id
// ])->fetch();


// if (! $note) {
//     abort();
// }

// Do two steps together
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $id
])->findOrFail();

// TODO: now we want instead of this condition we have the authorize function
// if ($note['user_id'] !== $currentUserId) {
//     abort(Response::FORBIDDEN);
// }


// this is how solve above problem
authorize($note['user_id'] === $currentUserId);


require __DIR__ . "/../views/note.view.php";
