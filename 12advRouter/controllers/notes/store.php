<?php
//TODO: put the logic of after form is submitted


use Core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


$errors = [];


if (!Validator::string($_POST['body'], 1, 100)) {
    $errors['body'] = 'Text can not be spaces, no text, or more than 100 characters';
}


// if any error happen
if (!empty($errors)) {
    return view('notes/create.view.php', [
        "heading" => "Create Note",
        "errors"  => $errors
    ]);
}


// if no errors
$db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);


header('location: /notes');
die();
