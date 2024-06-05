<?php
ob_start();
require_once "header.html";
require_once "../controller/vehiculeController.php";
$vehicule = new VehiculeController();
$voiture = $vehicule->afficher();
include "../view/afficher_vehicule.php";
if ($_GET) {
    if ($_GET['action'] == 'edit') {
        $vehicule->editer($_GET['id']);
    } elseif ($_GET['action'] == 'delete') {
        $vehicule->remove($_GET['id']);
    }
} else {
    $vehicule->ajouter();
}
ob_end_flush();
