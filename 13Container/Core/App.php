<?php


namespace Core;



// We have created the app.php because
// it serves as the central point for managing the application's container.
// This container stores and provides shared instances of classes and dependencies,
// enabling dependency injection and making the application more modular and easier to manage.
// The static methods allow easy access to the container from anywhere in the application.


class App 
{

    protected static $container;



    // set container
    public static function setContainer($container)
    {
        static::$container = $container;
    }



    // get container
    public static function container()
    {
        return static::$container;
    }



    // to make bind easier to use
    public static function bind($key, $resolver)
    {
        return static::container()->bind($key, $resolver);

    }



    // to make resolve easier to use
    public static function resolve($key)
    {
        return static::container()->resolve($key);

    }
}