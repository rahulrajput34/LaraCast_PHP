<?php
$config = require base_path('config.php');
$db = new Database($config['database']);



// $heading = "My Notes";
$notes = $db->query('select * from notes where user_id = 1')->get();



// TODO: here we are passing this pass and its not looking good
// We can create the function and pass this path in it as well to make code more readable
// require __DIR__ . "/../../views/notes/index.view.php";
// We must pass the heading and notes over here because its needed and when we make the function that time its not available in the functions scope automatically
// So we manually need to pass it and when its call the view function its going to work according to the logic of the function view and works fine
view('notes/index.view.php',[
    "heading" => "My Notes",
    "notes" => $notes
]
);