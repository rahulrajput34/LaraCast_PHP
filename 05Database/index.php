<?php
// TODO: making the as basic as posibble form of the database
require __DIR__ . "/functions.php"; 

// require __DIR__ . "/router.php"; 

// Connect to our MySQL database
// In the real life these all work is going to done by the framework and libararies So we do not need to worry about it
// We wrote it over here just for our understanding


$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

// This is the in-build sql class and we create one intance of that class
$pdo = new PDO($dsn);

// After creating that intance now we can use all the functinality in it
// Here some in-build class functionality we are going to use it


// This is how we can select the query we want
$statement = $pdo->prepare("select * from posts");

// This line is to ececute the statement
$statement -> execute();

// Now, we also have the fetch in it to fetch the data from the table
// $posts = $statement -> fetchAll();
// In above result there are some duplication over there so that we can fetch like below by giving the functinality

// To fetch without duplication
$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);


// dd($posts);

// Now we can play it with that data

foreach($posts as $post){
    echo "<li>". $post['title']. "</li>";
}