<?php

namespace Core;


class Container
{


    protected $bindings = [];


    // bind to bind something inside the container
    // key and function inside the parameter
    // we are setting the value for given key equals the function return ($resolver)
    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }



    // resolve to get something out from the container
    // here we pass the key first if check 
    public function resolve($key)
    {



        // if key not present inside above array throw exception
        if(!array_key_exists($key, $this->bindings)){
            throw new \Exception("No matching binding found for {$key}");
        }



        // if key present
        // get the value of key means get the function associated with that key we want
        // then call the function which we got from it
        if(array_key_exists($key, $this->bindings)){
            $resolver = $this->bindings[$key];

            return call_user_func($resolver);
        }

    }
}