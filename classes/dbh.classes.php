<?php

class Dbh
{

    protected function connect()
    {
        $username = "root";
        $password = "";
        $host = "localhost";
        $dbname = "investing";

        try {
            $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Error: " . $e;
            die();
        }
    }
}