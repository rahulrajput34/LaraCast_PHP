<?php
$config = require __DIR__ . '/../config.php';
require __DIR__ . '/../Validator.php';
$db = new Database($config['database']);
$heading = "Create Note";


// Using that validator class
// Now do not need to use it because we make that method static
// $validator = new Validator();


// check if the email validator works or not
// if the value is valid it will give the value if not valid then return the false
// dd(Validator::email('Rahul'));
dd(Validator::email('rahul@gmail.com'));


if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // So here we make the one type of the validator over here right
    // We might need this validator somewhere else as well 
    // So we make it inside the another class
    $errors = [];

    // function from the validator 
    // TODO: this is how we can use the static method
    // className and ::
    if(!Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] = 'Text can not be spaces, no text, or more than 1000 characters';
    }

    if(empty($errors)){
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }  
}



require __DIR__ . "/../views/note-create.view.php";
