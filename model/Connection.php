<?php
class Connection
{

    public function getConnect()
    {
        $propertiesArray = parse_ini_file('./conf/DB.ini');
        $host = $propertiesArray["serveur"];
        $port = $propertiesArray["port"];
        $db = $propertiesArray["db"];
        $user = $propertiesArray["ut"];
        $pwd = $propertiesArray["mdp"];
        try {
            $db = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }
        return $db;
    }
}
