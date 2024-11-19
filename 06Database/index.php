<?php
// TODO: Convert the simple database into the class structure
require __DIR__ . "/functions.php"; 

// require __DIR__ . "/router.php"; 

// import the Database over here
require __DIR__ . "/Database.php"; 


// To create the new intance
$db = new Database();
// $posts = $db->query("select * from posts")-> fetchAll(PDO::FETCH_ASSOC);
$posts = $db->query("select * from posts")-> fetch(PDO::FETCH_ASSOC);

// For fetch all
// dd($posts[0]['title']);

// for fetch as its gives back only one array
dd($posts['title']);


// First we converted the database into the class structure
// Then we realise its only for one given query then we out the query and pass it as paramter.
// Now we are able to pass the query we want
// Now we realise when we run the query function its create the whole process from the scrach and in the big applications we might need to run the query function 100 time so Its going to make this process 100 times that not a good practice
// Then we are not able to acces the $pdo in that function so we delcared it outside
// What if we want not to do fetchAll every time sometime we just want to give the fetch so we extracted fetchAll as well outside the method
// Then we out all the logic of this and store inside the diffent directory for the code organization