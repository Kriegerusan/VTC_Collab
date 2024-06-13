<?php
class Connection
{

    public function getConnect()
    {
        $propertiesArray = parse_ini_file('../config/connection.ini');
        $host = $propertiesArray["serveur"];
        $db = $propertiesArray["db"];
        $user = $propertiesArray["ut"];
        $pwd = $propertiesArray["mdp"];
        try {
            $db = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }
        return $db;
    }
}
