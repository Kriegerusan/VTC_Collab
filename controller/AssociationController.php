<?php
require_once "../model/Association.php";
require_once "../model/Vehicule.php";
require_once "../model/Conducteur.php";
class AssociationController
{
    public function ajouter()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!$_GET) {
                $association  = new association();
                $association->create($_POST, 'association');
            }
        }

        $conducteur  = new Conducteur();
        $listeConduc = $conducteur->read("conducteur");

        $vehicule  = new Vehicule();
        $listevehicule = $vehicule->read("vehicule");


        require_once "../view/ajout_association.php";
    }


    public function afficher()
    {


        $association  = new Association();
        return $association->read("association");
    }

    public function editer($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_GET) {
                $association  = new Association();
                return $association->edit($_POST, $id, "association");
            }
        }
        $conducteur  = new Conducteur();
        $listeConduc = $conducteur->read("conducteur");

        $vehicule  = new Vehicule();
        $listevehicule = $vehicule->read("vehicule");
        require_once "../view/editer_association.php";
    }
}
