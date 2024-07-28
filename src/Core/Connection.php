<?php

namespace src\Core;

use PDO;
use PDOException;

class Connection
{
    private static $instancia;

    public static function getInstancia(): PDO
    {
        if(empty(self::$instancia))
        {
            try{

                self::$instancia = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASS, [
                    PDO::ATTR_ERRMODE
                ]);

            } catch(PDOException $ex){
                die("Erro de conexão :: ".$ex->getMessage());
            }

            return self::$instancia;
        }
    }

    protected function __construct(){}

    private function __clone():void {}

}   