<?php

require_once "iCRUD.php";
require_once "Connection.php";

class Association extends Connection implements iCRUD
{/*
    private $prenom;
    private $nom;

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenom($prenom)
    {
        return $this->prenom = $prenom;
    }

    public function setNom($nom)
    {
        return $this->nom = $nom;
    }
*/
    public function create($donnees, $table)
    {
        $db = Connection::getConnect();

        $champs = "";
        $valeurs = "";

        foreach ($donnees as $indice => $valeur) {
            $champs .= ($champs ? "," : "") . $indice;
            $valeurs .= ($valeurs ? "," : "") . "'$valeur'";
        }

        $sql = $db->prepare("INSERT INTO $table ($champs)  VALUES ($valeurs)");
        if ($sql->execute()) {
            //REDIRECTION SUR LA MM PAGE

            header('Location:' . $_SERVER['PHP_SELF']);
        }
    }

    public function read($table)
    {
        $db = Connection::getConnect();
        $sql = $db->prepare("SELECT * FROM $table");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function edit($donnees, $id, $table)
    {
        $db = Connection::getConnect();
        $champs = "";
        foreach ($donnees as $indice => $valeur) {
            $champs .= ($champs ? "," : "") . $indice . "=" . "'$valeur'";
        }

        $sql = $db->prepare("UPDATE $table SET $champs WHERE id=$id");

        if ($sql->execute()) {
            //REDIRECTION SUR LA MM PAGE
            header('Location:' . $_SERVER['PHP_SELF']);
        }
    }
}
