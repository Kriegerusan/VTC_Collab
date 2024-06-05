<?php
ob_start();
require_once "view/header.html";
require_once "controller/ConducteurController.php";
$conducteur = new ConducteurController();
$conduc = $conducteur->afficher();
include "./view/afficher_conducteur.php";
if ($_GET) {
    if ($_GET['action'] == 'edit') {
        $conducteur->editer($_GET['id']);
    } elseif ($_GET['action'] == 'delete') {
        $conducteur->remove($_GET['id']);
    }
} else {
    $conducteur->ajouter();
}
ob_end_flush();
