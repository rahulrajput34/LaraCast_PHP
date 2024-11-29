<?php
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}



// we declare the basepath wherever we needed
// path for the base folder
function base_path($path){
    return BASE_PATH.$path;
}


// path for the view
// by default we give the array
function view($path, $attribute = []){
    // we can also give the extract function over here
    // Which makes the array all the key value in the variables where the variable name is the key and the value is the value
    extract($attribute);
    // dd($heading);  // yee, it make the array into the variables 

    // we take the base path from the function and give the view path over here
    // the below gonna be look like basepath, then view and then path we want
    require base_path('views/'. $path);
}
