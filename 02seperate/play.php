<?php
// Playing with arrays from giving real-project examples
$business = [
    'name' => 'GlanzWeb',
    'cost' => 15,
    'categories' => [
        'Website',
        'Database',
        'Solutions',
    ],
];

foreach ($business['categories'] as $category){
    echo "$category, ";
}

function register($user){
    // create the user
    // log them in
    // send a welcome email
    // Redirect to their new dashboard
}

require "play.view.php";