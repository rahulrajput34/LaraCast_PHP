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
// first we extract the routes in routes directory
// Then we want a create note-create.php which create a new note and store it inside the database
// For that we use the form and make it like whenever someone submit the form then store it inside the database
// Then know about the htmlSpecialChars
// Now there might be some vulnerable issue inside the submitting the form like if I submit the form directly without passing any input then its submitted
// To solve this issue we can give the required attribute over there
// But still If someone pass the empty input over there by using some tools like curl and all then the form is going to submitted
// like this curl -X POST http://localhost:3000/notes/create -d "body=''" inside the command prompt
// for that we gave the condition over there inside the note-create.php
// Now we want to give user also a message so he is not going to submit empty again
// then we give the condition in the html
// Now we have one more error what if someone pass the too much of the text into the from
// so we want to limit the length which we can do it by providing the another condition over there
// Now there is one more problem over here like if we wrote the 1001 word and submit it then the data is going to be gone
// How do we prevent that
// to prevent this we can use the $_POST['body'] ?? '' inside the textarea and save the previous info

