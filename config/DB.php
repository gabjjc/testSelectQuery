<?php

class DB
{
    public static function connexion()
    {
        $mysqli = new mysqli(   'localhost',
                                'root',
                                'test',
                                'test');

        if (!$mysqli) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        $mysqli->query("SET NAMES 'utf8'");

        return $mysqli;
    }
}
