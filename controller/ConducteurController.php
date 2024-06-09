<?php

require_once "../model/Conducteur.php";
require_once "../libs/ImageManager.php";
class ConducteurController
{

    public function ajouter()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!$_GET) {
                $conducteur  = new Conducteur();
                if ($_FILES['photo']['size'] == 0) {
                    return $conducteur->create($_POST, "conducteur");
                } else {
                    $image = new ImageManager($_FILES['photo']);
                    if ($image == null) {
                        echo $image->GetError();
                    } else {
                        $image->moveImageToFolder();
                        $dataArray = array(
                            'prenom' => $_POST['prenom'],
                            'nom' => $_POST['nom'],
                            'photo' => $image->getImageInfo()['uniqueName']
                        );

                        return $conducteur->create($dataArray, "conducteur");
                    }
                }
            }
        }
        require_once "ajout_conducteur.html";
    }


    public function afficher()
    {
        $conducteur  = new Conducteur();
        return $conducteur->read("conducteur");
    }

    public function editer($id)
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_GET) {
                $conducteur  = new Conducteur();
                if ($_FILES['photo']['size'] == 0) {
                    return $conducteur->edit($_POST, $id, "conducteur");
                } else {
                    $image = new ImageManager($_FILES['photo']);
                    if ($image == null) {
                        echo $image->GetError();
                    } else {
                        $image->moveImageToFolder();
                        $dataArray = array(
                            'prenom' => $_POST['prenom'],
                            'nom' => $_POST['nom'],
                            'photo' => $image->getImageInfo()['uniqueName']
                        );

                        return $conducteur->edit($dataArray, $id, "conducteur");
                    }
                }
            }
        }




        require_once "editer_conducteur.php";
    }

    public function remove($id)
    {

        if ($_GET['action'] == "delete") {
            $conducteur  = new Conducteur();
            return $conducteur->delete($id, 'conducteur');
        }
    }
}
