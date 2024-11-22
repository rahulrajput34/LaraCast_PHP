<?php
$config = require __DIR__ . '/../config.php';
$db = new Database($config['database']);
$heading = "Create Note";


if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
    //     'body' => $_POST['body'],
    //     'user_id' => 1
    // ]);



    // if we are passing empty string through this command ==> curl -X POST http://localhost:3000/notes/create -d "body=''"    ==> then it store the value of an empty string into the database
    // To solve that problem
    $errors = [];


    if(strlen($_POST['body']) === 0){
        $errors['body'] = 'A body is required';
    }

    if(strlen($_POST['body']) > 1000){
        $errors['body'] = 'The body can not be more than 1,000 characters';
    }

    if(empty($errors)){
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }  
}



require __DIR__ . "/../views/note-create.view.php";
