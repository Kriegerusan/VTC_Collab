<?php

require_once "../model/Conducteur.php";

class ConducteurController
{

    public function ajouter()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!$_GET) {
                $conducteur  = new Conducteur();
                $KO = 0;
                if ($_FILES['photo']['name'] != "") {
                    $dossier = "../public/";

                    $tmpName = $_FILES['photo']['tmp_name'];
                    $name = $_FILES['photo']['name'];
                    $size = $_FILES['photo']['size'];
                    $error = $_FILES['photo']['error'];

                    $tabExtension = explode('.', $name);
                    $extension = strtolower(end($tabExtension));
                    //Tableau des extensions que l'on accepte
                    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                    //Taille max que l'on accepte
                    $maxSize = 400000;
                    if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                        $uniqueName = uniqid('', true);
                        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                        $photo = $uniqueName . "." . $extension;
                        //$file = 5f586bf96dcd38.73540086.jpg
                        move_uploaded_file($tmpName, $dossier . $photo);
                    } else {
                        echo "Mauvaise extension";
                        $KO++;
                    }
                }

                $donnees = [];
                $donnees[0] = "photo";
                $donnees[1] = "'$photo'";
                foreach ($_POST as $indice => $valeur) {
                    $donnees[0] .= ($donnees[0] ? "," : "") . $indice;
                    $donnees[1] .= ($donnees[1] ? "," : "") . "'$valeur'";
                }
                $conducteur->create($donnees, 'conducteur');
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
            if ($_GET['action'] == "edit") {
                $conducteur  = new Conducteur();

                $KO = 0;

                if ($_FILES['photo']['name'] != "") {
                    $dossier = "../public/";

                    if (!file_exists($dossier)) {
                        mkdir($dossier, 755);
                    }
                    $tmpName = $_FILES['photo']['tmp_name'];
                    $name = $_FILES['photo']['name'];
                    $size = $_FILES['photo']['size'];
                    $error = $_FILES['photo']['error'];

                    $tabExtension = explode('.', $name);
                    $extension = strtolower(end($tabExtension));
                    //Tableau des extensions que l'on accepte
                    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                    //Taille max que l'on accepte
                    $maxSize = 400000;
                    if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                        $uniqueName = uniqid('', true);
                        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                        $photo = $uniqueName . "." . $extension;
                        //$file = 5f586bf96dcd38.73540086.jpg
                        move_uploaded_file($tmpName, $dossier . $photo);
                        $champs = "photo='$photo'";
                    } else {
                        echo "Mauvaise extension";
                        $KO++;
                    }
                } else {
                    $champs = "";
                }

                foreach ($_POST as $indice => $valeur) {
                    $champs .= ($champs ? "," : "") . $indice . "=" . "'$valeur'";
                }

                return $conducteur->edit($champs, $id, 'conducteur');
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
