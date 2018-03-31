<?php

namespace App\Core;

class Router
{
    /** 
     * Methods Protegidos
     * 
     * @ array
     */
    public $routes = [
        'GET' => [],
        'POST' => []
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
    /**
     * Function do Method GET
     */
    public function get($uri, $controller)
    {
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
     * Function que associa a URI com o Method dentro da Rota
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('Nenhuma Rota definida para esta URI!');
    }
    /**
     * Function que concatena o Controller ao Método
     * ex: PagesController@home
     */
    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception(
                "{$controller}  Não corresponde a {$action} ação."
            );
        }

        return $controller->$action();
    }
}