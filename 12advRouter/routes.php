<?php


$router->get('/', '/controllers/index.php');
$router->get('/index', '/controllers/index.php');
$router->get('/about', '/controllers/about.php');
$router->get('/notes', '/controllers/notes/index.php');


$router->get('/note', '/controllers/notes/show.php');
$router->delete('/note', '/controllers/notes/destroy.php');
$router->get('/contact', '/controllers/contact.php');


// There is a convention here
// Route to display the form for creating a new note
$router->get('/notes/create', '/controllers/notes/create.php');

// Route to handle the submission of a new note
// we give store name over here and give the post method for it
$router->post('/notes', '/controllers/notes/store.php');
