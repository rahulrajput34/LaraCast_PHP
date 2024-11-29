<?php
// TODO: /../ means ek step bahar
// /../../ means 2 step bahar config file che


// $config = require __DIR__ . '/../../config.php';
// require __DIR__ . '/../../Validator.php';
$config = require base_path('config.php');
require base_path('/Core/Validator.php');


$db = new Database($config['database']);
$heading = "Create Note";
$errors = [];



if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    if(!Validator::string($_POST['body'], 1, 100)){
        $errors['body'] = 'Text can not be spaces, no text, or more than 100 characters';
    }

    if(empty($errors)){
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }  
}

// require __DIR__ . "/../../views/notes/create.view.php";

view('notes/create.view.php',[
    "heading" => "Create Note",
    "errors"  => $errors
]);
