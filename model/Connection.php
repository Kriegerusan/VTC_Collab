<?php
class Connection
{

    public function getConnect()
    {
        try {
            //$db = new PDO("mysql:host=sql201.infinityfree.com;dbname=if0_36696451_vtc", "if0_36696451", "VaTPLmTwI70spU");
            $db = new PDO("mysql:host=localhost;dbname=vtc", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }
        return $db;
    }
}
