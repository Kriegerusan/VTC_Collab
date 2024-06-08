<?php

require_once "../model/Vehicule.php";

class VehiculeController
{

    public function ajouter()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!$_GET) {
                $vehicule  = new vehicule();
                $vehicule->setmarque($_POST['marque']);
                $vehicule->setmodele($_POST['modele']);
                $vehicule->setcouleur($_POST['couleur']);
                $vehicule->setimmatriculation($_POST['immatriculation']);
                $vehicule->create($_POST, 'vehicule');
            }
        }

        require_once "../view/ajout_vehicule.html";
    }


    public function afficher()
    {
        $vehicule  = new vehicule();
        return $vehicule->read("vehicule");
    }

    public function editer($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_GET) {
                $vehicule  = new vehicule();
                if($_FILES['photo']['size'] == 0){
                    return $vehicule->edit($_POST, $id, "vehicule");
                }
                else
                {
                    $dataArray = array(
                        'marque' => $_POST['marque'],
                        'modele' => $_POST['modele'],
                        'couleur' => $_POST['couleur'],
                        'immatriculation' => $_POST['immatriculation'],
                        'photo' => $_FILES['photo']['name']
                    );

                    return $vehicule->edit($dataArray, $id, "vehicule");
                }
                
            }
        }
        require_once "../view/editer_vehicule.php";
    }

    public function remove($id)
    {

        if ($_GET['action'] == "delete") {
            $vehicule  = new vehicule();
            return $vehicule->delete($id, 'vehicule');
        }
    }
}
