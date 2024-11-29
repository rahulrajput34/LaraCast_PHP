<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH. "Core/functions.php"; 


// TODO: Here we also need the nameSpace
spl_autoload_register(function($class){
    // dd($class);  //  Core\Database      <== it needed this
    // get the class string and wherever there is \ it will change to / and store that string in given variable
    $class = str_replace("\\", '/', $class);
    require base_path("$class.php"); 
});
require base_path("Core/router.php");




//  php -S localhost:3000 -t public



//TODO: We are going to learn NameSpacing topic
// In the spotify the song are on the different categories
// Why the do that
// to avoid the collision, group the song, make it inside the good structure they do it
// NameSpacing is also something like that
// TODO: We give this namespace to the all of our classes we have to make it well structured
// TODO: we also give the delete note option in the show note, we do it using if the user submit the form take it like he want to delete the note and delete it from the database
// we also give if the authorize user is deleting the note or someone else

