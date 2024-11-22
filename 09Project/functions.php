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

// create function authorize and give the default status code
function authorize($condition, $status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}
