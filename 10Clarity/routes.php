<?php
return [
    '/index.php' => '/controllers/index.php',
    '/10Clarity/controllers/index' => '/controllers/index.php',
    '/10Clarity/controllers/about' => '/controllers/about.php',
    '/10Clarity/controllers/notes/index' => '/controllers/notes/index.php',
    '/note' => '/controllers/notes/show.php',
    '/notes/create' => '/controllers/notes/create.php',
    '/10Clarity/controllers/contact' => '/controllers/contact.php'
];



// It common convention for where controller is displaying list of all then we give the index name to it in place of the name notes
// note is just for show the single note then we give the name show over there in place of note