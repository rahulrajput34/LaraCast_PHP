<?php
// TODO: access the database values over here

// We do not have the reference of the database
// So we directoly copy from the index and use it over here
$config = require __DIR__ . '/../config.php';
$db = new Database($config['database']);

$heading = "My Notes";

// In this notes we are fetching the data of the user 1 only
// Fetch all the data from given reference of database from this query
$notes = $db->query('select * from notes where user_id = 1')->fetchAll();
// dd($notes);


// So that the $notes will available in the notes.view.php file as well
require __DIR__ . "/../views/notes.view.php";











