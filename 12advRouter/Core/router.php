<?php


namespace Core;


class Router
{


    // its not available outside of this Router class
    protected $routes = [];



    // Generic method to add routes
    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => strtoupper($method),
        ];
    }



    public function get($uri, $controller)
    {
        // push the value into the routes
        $this->add('GET', $uri, $controller);
    }



    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }



    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }



    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }



    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }



    // function for the routes
    public function route($uri, $method = 'GET')
    {
        // Loop through the protected routes
        foreach ($this->routes as $route) {
            // Find the path and check if it matches the requested type
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }
        $this->abort();
    }




    // for abort
    protected function abort($code = 404)
    {
        http_response_code($code);
        require base_path("views/{$code}.php");
        die();
    }
}
