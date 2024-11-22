<?php
require __DIR__ . "/functions.php"; 
require __DIR__ . "/Database.php"; 
require __DIR__ . "/Response.php";
require __DIR__ . "/router.php"; 








// TODO:  Full- Details about the project
// first we want created two table notes and users with a foreign key
// Now we want to access that notes in our webpage
// First, We gonna learn how to access it from database
// Then, we get that id according to that particular given user id
// Then, we get the note according to particular note id
// But we are able to access the id of the other user as well and there might be security threat
// So that we passed the query with and, like id and user_id if both right then proceed
// Then we out the user id from the query and then give the different logic in the ifelse
// But its still  giving the 404 if I pass the abort over there and its not a good practice
// Then I passed the 403 over there if the note is exits but created by someone else and 404 for if the note is not exit
// Then we found that is not good practice to always get the error from the directory router so we created the response directory and pass the errors in the class base model
// Then we started to the clean the code and make it more readable
// first we Make the fetch and abort together
// then we create authorize function 
// then make fetch all method to the name get method

