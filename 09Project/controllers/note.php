<?php
// TODO: here we also need to hardcode the database like this because we want to use it
$config = require __DIR__ . '/../config.php';
$db = new Database($config['database']);


$heading = "Note";
// We declare it into the variable for clarity
$currentUserId = 1;
// get the id from url
$id = $_GET['id'] ?? null;
// dd($id);


$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $id
    ])->fetch();
// dd($note);   // if both above not true then return the false because we did not get the anything from the database



if(! $note){
    abort();
}


// To check if the user is 1 or not
if($note['user_id'] !== $currentUserId){
    // from the class
    abort(Response::FORBIDDEN);
}


require __DIR__ . "/../views/note.view.php";


