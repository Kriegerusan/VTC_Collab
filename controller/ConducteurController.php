<?php

require_once "./model/Conducteur.php";

class ConducteurController
{

    public function ajouter()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!$_GET) {
                $conducteur  = new Conducteur();
                $conducteur->setPrenom($_POST['prenom']);
                $conducteur->setNom($_POST['nom']);
                $conducteur->create($_POST, 'conducteur');
            }
        }

        require_once "./view/ajout_conducteur.html";
    }


    public function afficher()
    {
        $conducteur  = new Conducteur();
        return $conducteur->read("conducteur");
    }

    public function editer($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_GET['action'] == "edit") {

                $conducteur  = new Conducteur();
                return $conducteur->edit($_POST, $id, 'conducteur');
            }
        }
        require_once "./view/editer_conducteur.php";
    }

    public function remove($id)
    {

        if ($_GET['action'] == "delete") {
            $conducteur  = new Conducteur();
            return $conducteur->delete($id, 'conducteur');
        }
    }
}
