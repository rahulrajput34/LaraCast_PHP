<?php
//TODO: Till now we are getting the different page directoly
// But now we want to wrap all the path inside the one directory
// For that we do like this

//TODO: here we added function.php so that we do not need to give the this on the about.php and all so we removed it from there
require __DIR__ . "/functions.php"; 

// Then we put all the router inside the router.php
require __DIR__ . "/router.php"; 
