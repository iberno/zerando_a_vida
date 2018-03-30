<?php

class Router
{
    /** 
     * Methods Protegidos
     */
    protected $routes = [
        'GET'       =>  [],  
        'POST'      =>  [],  
        'PATCH'     =>  [],  
        'PUT'       =>  [],  
        'DELETE'    =>  [] 
    ];
    /** 
     * Function que prepara a Rota
     */
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
    // /** 
    //  * Function que Define a Rota
    //  */
    // public function define($routes)
    // {
    //     $this->routes = $routes;
    // }
    /**
     * Function do Method GET
     */
    public function get($uri, $controller)
    {
        $getRoutes = [];
        
        $this->routes['GET'][$uri] = $controller;
    }
    /**
     * Function do Method POST
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    /**
     * Function do Method PATCH
     */
    public function patch($uri, $controller)
    {
        $this->routes['PATCH'][$uri] = $controller;
    }
    /**
     * Function do Method PUT
     */
    public function put($uri, $controller)
    {
        $this->routes['PUT'][$uri] = $controller;
    }
    /**
     * Function do Method DELETE
     */
    public function delete($uri, $controller)
    {
        $this->routes['DELETE'][$uri] = $controller;
    }
    /**
     * Function que associa a URI com o Method dentro da Rota
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }
        throw new Exception('Nenhuma Rota definida para esta URI!');
    }
}