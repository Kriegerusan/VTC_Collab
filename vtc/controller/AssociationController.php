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
        $listeConduc = $conducteur->readConducteurLibre();

        $vehicule  = new Vehicule();
        $listevehicule = $vehicule->readVehiculeLibre("vehicule");


        require_once "../view/ajout_association.php";
    }


    public function afficher()
    {

        $association  = new Association();
        return $association->read("association");
    }

    public function editer($id, $id_conducteur, $id_vehicule)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_GET) {
                $association  = new Association();
                return $association->edit($_POST, $id, "association");
            }
        }
        $conducteur  = new Conducteur();

        $listeConduc = $conducteur->editConducteurLibre($id_conducteur);

        $vehicule  = new Vehicule();
        $listevehicule = $vehicule->editVehiculeLibre($id_vehicule);
        require_once "../view/editer_association.php";
    }
    public function remove($id)
    {

        if ($_GET['action'] == "delete") {
            $association  = new Association();
            return $association->delete($id, 'association');
        }
    }
}
