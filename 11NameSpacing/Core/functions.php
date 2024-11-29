<?php
use Core\Response;

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



function base_path($path){
    return BASE_PATH.$path;
}



function view($path, $attribute = []){
    extract($attribute);
    require base_path('views/'. $path);
}
