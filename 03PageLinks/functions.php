<?php
// TODO: This is what we need to mant times so for making it esay to use We store it inside the function and do it whenever we want
// For get all the details about the varibales we use the var_dump
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
// We want to die becase we do not want to display something else than we want to get the details about perticuler given varibale or an array or whatever
    die();
}

// Server is the super global varibale inside the php which can be accessable anywhere into the php
// dd($_SERVER);    // We have "REQUEST_URI" over here which gives us the current route
// So that we can access the "REQUEST_URI" like this
// echo $_SERVER["REQUEST_URI"];


// it will return true or false
// As a $value we are going to pass the route over here
function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}