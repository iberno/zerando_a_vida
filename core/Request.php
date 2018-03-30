<?php

class Request
{
    /**
     * Classe responsável por criar as URIs
     */
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }
    /**
     * Classe que pega o Metodo da URI
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}