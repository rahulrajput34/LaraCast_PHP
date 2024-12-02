<?php
//TODO: logic of the create form
// use Core\Database;


// $config = require base_path('config.php');
// require base_path('/Core/Validator.php');


// $db = new Database($config['database']);
// $heading = "Create Note";
// $errors = [];



// if($_SERVER['REQUEST_METHOD'] === 'POST') 
// {
//     if(!Validator::string($_POST['body'], 1, 100)){
//         $errors['body'] = 'Text can not be spaces, no text, or more than 100 characters';
//     }

//     if(empty($errors)){
//         $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
//             'body' => $_POST['body'],
//             'user_id' => 1
//         ]);
//     }  
// }



// TODO: we are just showing the notes in this directory
view('notes/create.view.php',[
    "heading" => "Create Note",
    "errors"  => []
]);
