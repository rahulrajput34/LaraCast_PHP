<?php
// TODO: if we only have the php written inside the code we can omit to close the php
$movies = [
    [
        "name" => "Spiderman",
        "author" => false,
        "releaseYear" => 2017,
        "purchaseUrl" => "http://example.com",
    ],
    [
        "name" => "Leo",
        "author" => true,
        "releaseYear" => 2023,
        "purchaseUrl" => "http://example.com",
    ],
    [
        "name" => "RRR",
        "author" => true,
        "releaseYear" => 2022,
        "purchaseUrl" => "http://example.com",
    ],
];

$filteredMovies = array_filter($movies, function($movie){
    return $movie['name'] === 'RRR';
});

// Get the reference from the  index.view
// here will the html goes
require "index.view.php";

