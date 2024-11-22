<?php
$config = require __DIR__ . '/../config.php';
$db = new Database($config['database']);


// TODO: we want to add a note into the database via the form
$heading = "Create Note";

// dd($_SERVER);
// So we have the POST req over there but we load that same website that time it become GET
// because first one is for submit the form and second one is we access the from via get req

if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // dd($_POST);  // we are able to access the value in it Now we need to put it inside the database
    // Now we give the query of the add the data into the database
    $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
    // Yeah its working fine but there might be some big concerns of  it
    // Like if someone pass the alert message or something html inside it its gonna work
    // So we need to covert the html into the html entity
    // we have two method one is sanitize the input by giving htmlSpecialChars or second is sanitize methods inside the notes where are echo the notes
    // But still there is issue if someone click on it there will be still an alert and error
    //  So we need to give the htmlSpecialChars wherever we access that note
}

require __DIR__ . "/../views/note-create.view.php";
