<?php


class Connection
{
    function openConnection(): PDO
    {
        $database = include('config.php');

        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        return new PDO('mysql:host=' . $database['dbhost'] . ';dbname=' . $database['db'], $database['dbuser'], $database['dbpass'], $driverOptions);
    }
}
