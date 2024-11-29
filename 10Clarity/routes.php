<?php
return [
    '/' => '/controllers/index.php',
    '/index' => '/controllers/index.php',
    '/about' => '/controllers/about.php',
    '/notes/index' => '/controllers/notes/index.php',
    '/note' => '/controllers/notes/show.php',
    '/notes/create' => '/controllers/notes/create.php',
    '/contact' => '/controllers/contact.php'
];

// It common convention for where controller is displaying list of all then we give the index name to it in place of the name notes
// note is just for show the single note then we give the name show over there in place of note