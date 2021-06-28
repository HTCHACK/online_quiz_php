<?php


class Router
{

    protected $routes = [];



    public static function load($file){

        $router = new static;

        require $file;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes) and $uri == $this->routes['admin']) 
        {
            return $this->routes['login'];
        }
        elseif (array_key_exists($uri, $this->routes) and $uri != $this->routes['admin'])
        {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this uri.');
    }

}
