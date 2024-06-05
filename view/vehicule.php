<?php
require_once "header.html";
require_once "../controller/vehiculeController.php";
$vehicule = new VehiculeController();
$voiture = $vehicule->afficher();
include "../view/afficher_vehicule.php";
if ($_GET) {
    $vehicule->editer($_GET['id']);
} else {
    $vehicule->ajouter();
}
