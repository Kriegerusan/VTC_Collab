<?php
require_once "header.html";
require_once "../controller/AssociationController.php";
$association = new AssociationController();
$asso = $association->afficher();
include "../view/afficher_association.php";
if ($_GET) {
    $association->editer($_GET['id']);
} else {
    $association->ajouter();
}
