<?php

/**
 * Classe PDO de conexão com Banco de Dados 
 */
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
