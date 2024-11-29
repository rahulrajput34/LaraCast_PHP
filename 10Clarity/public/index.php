<?php
// require __DIR__ . "/../functions.php"; 
// require __DIR__ . "/../Database.php"; 
// require __DIR__ . "/../Response.php";
// require __DIR__ . "/../router.php"; 





// // We can also do it simple like store it into the variable
// //   /../ is take us to main folder
// const BASE_PATH = __DIR__.'/../';
// // // var_dump(BASE_PATH);
// require BASE_PATH. "functions.php"; 
// require BASE_PATH. "Database.php"; 
// require BASE_PATH. "Response.php";
// require BASE_PATH. "router.php"; 





// we can create the code more readable by passing the function inside the function.php
// TODO: We declare the variable BASE_PATH in the root file so its accessible all over the code
const BASE_PATH = __DIR__.'/../';
// // var_dump(BASE_PATH);
require BASE_PATH. "Core/functions.php"; 





// require base_path("Database.php"); 
// require base_path("Response.php");
// TODO: I do not want to manually give the two different classes above I want every time the php code loads it will get the both automatically
// This below method will return the Classname which PHP is trying to load at runtime.
// Here it will load all the methods which will be needed
// At the start when we load the notes that time its load the Database only because its needed
spl_autoload_register(function($class){
    // var_dump($class);
    require base_path("Core/$class.php"); 
});
require base_path("Core/router.php");





//TODO: So if we just pass the url of router.php or config.php directly, We can access it
// So this might be a security concern for us
// For that reason we created the public folder and give root to it from below command
//  php -S localhost:3000 -t public
// Now our root is public so browser does not know about any other folder, what its know is only the root folder which is the public over here





// TODO:  What we did in this lecture
// Give root to the public so no one can directly access the file by just passing the url
// We gave better routing names
// base_path function for better name of _DIR_
// View function for make code more readable
// Then give the Core folder and store whatever is the code of this project