<?php

require_once '../model/Association.php';
require_once '../model/Conducteur.php';
require_once '../model/Vehicule.php';

class AdminController
{

    public function afficherConducteurs()
    {
        $conducteurInstance = new Conducteur();

        return $conducteurInstance->read("conducteur");

    }

    public function afficherVehicules()
    {
        $vehiculeInstance = new Vehicule();

        return $vehiculeInstance->read("vehicule");
    }

    public function afficherAssociation()
    {
        $associationInstance = new Association();

        return $associationInstance->read("association");
    }

    public function afficherVehiculeLibre()
    {
        $vehiculeInstance = new Vehicule();

        //en attente d'implementation
        //return array
        //$vehiculeLibre = $vehiculeInstance->readVehiculeLibre();

    }

    public function afficherConducteurLibre()
    {
        $conducteurInstance = new Conducteur();

        //en attente d'implementation
        //return array
        //$conducteurLibre = $conducteurInstance->readConducteurLibre();
    }
}