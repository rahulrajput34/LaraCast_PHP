<?php
// TODO: class for all the validation
class Validator 
{
    // For checking the value if the length is 0 or not and also trim it for spaces
    // public function string($value){
    //     return strlen(trim($value)) === 0;
    // }


    // TODO: There is no usage of the  outside method in it like we are not using anything from outside we also not using anything with the this
    // So in this case We can make this method as well so that we can use it outside without even give the instance of this method
    // we can do all together
    // check the length, trim it and give maximum length
    public static function string($value, $min = 1, $max = INF){
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }


    // We can also make other validation method as well
    public static function email($value)
    {
        // value, Desire value
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    
};