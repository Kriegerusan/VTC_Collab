<?php

require_once 'header.html';
require_once '../controller/AdminController.php';

$adminControllerInstance = new AdminController();

?> 

<div class='container'>
    <table class='tableau table'>
        <thead>
            <tr>
                <hr>
                <th scope="col">Nombre de conducteurs</td>
                <th scope="col">Nombre de vehicules</td>
                <th scope="col">Nombre d'association</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope='row'><?php echo count($adminControllerInstance->afficherConducteurs()) ?></td>
                <td><?php echo count($adminControllerInstance->afficherVehicules()) ?></td>
                <td><?php echo count($adminControllerInstance->afficherVehicules()) ?></td>
            </tr>
        </tbody>
    </table>
</div>
