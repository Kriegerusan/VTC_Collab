<?php

require_once "iCRUD.php";
require_once "Connection.php";

class Conducteur extends Connection implements iCRUD
{
    private $prenom;
    private $nom;
    private $photo;

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPrenom($prenom)
    {
        return $this->prenom = $prenom;
    }

    public function setNom($nom)
    {
        return $this->nom = $nom;
    }

    public function setPhoto($photo)
    {
        return $this->photo = $photo;
    }

    public function __toString()
    {
        return $this->getPrenom() . " " . $this->getNom();
    }
    public function create($donnees, $table)
    {
        $db = Connection::getConnect();






        $sql = $db->prepare("INSERT INTO $table ($donnees[0])  VALUES ($donnees[1])");
        if ($sql->execute()) {
            //REDIRECTION SUR LA MM PAGE

            header('Location:' . $_SERVER['PHP_SELF']);
            exit();
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

        $sql = $db->prepare("UPDATE $table SET $donnees WHERE id=$id");
        if ($sql->execute()) {
            //REDIRECTION SUR LA MM PAGE
            header('Location:' . $_SERVER['PHP_SELF']);
            exit();
        }
    }

    public function delete($id, $table)
    {
        $db = Connection::getConnect();

        $sql = $db->prepare("delete from $table where id=$id");

        if ($sql->execute()) {
            //REDIRECTION SUR LA MM PAGE
            header('Location:' . $_SERVER['PHP_SELF']);
        }
    }

    public function readConducteurLibre()
    {
        $db = Connection::getConnect();
        $sql = $db->prepare("SELECT conducteur.*
        FROM conducteur
        LEFT JOIN association ON conducteur.id = association.conducteur
        WHERE association.conducteur IS NULL;");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editConducteurLibre($id)
    {
        $db = Connection::getConnect();
        $sql = $db->prepare("SELECT conducteur.*
        FROM conducteur
        LEFT JOIN association ON conducteur.id = association.conducteur
        WHERE association.conducteur IS NULL OR conducteur.id=$id;");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
