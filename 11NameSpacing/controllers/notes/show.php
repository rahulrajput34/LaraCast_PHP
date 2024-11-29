<?php


use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


// delete a note
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    
    // Authorization if the note is of that user
    $currentUserId = 1;
    $id = $_GET['id'] ?? null;

    $note = $db->query('SELECT * FROM notes WHERE id = :id', [
        'id' => $id
    ])->findOrFail();
    authorize($note['user_id'] === $currentUserId);


    // dd($_POST);
    $pressedDeleteOnId = $_POST['id'];
    // form was submitted, delete the current note
    $db->query('DELETE FROM notes WHERE id= :id', [
        'id' => $pressedDeleteOnId
    ]);


    //After deleting the note where to go
    header('location: /notes');
    die();



} else {
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
}
