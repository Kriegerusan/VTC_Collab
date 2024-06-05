<?php
ob_start();
require_once "header.html";
require_once "../controller/AssociationController.php";
$association = new AssociationController();
$asso = $association->afficher();
include "../view/afficher_association.php";
if ($_GET) {
    if ($_GET['action'] == 'edit') {
        $association->editer($_GET['id'], $_GET['conducteur'], $_GET['vehicule']);
    } elseif ($_GET['action'] == 'delete') {
        $association->remove($_GET['id']);
    }
} else {
    $association->ajouter();
}
ob_end_flush();
