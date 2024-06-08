<?php

require_once 'header.html';
require_once '../controller/AdminController.php';

$adminControllerInstance = new AdminController();

?>

<div class='container table-responsive-sm'>
    <table class='tableau table'>
        <thead>
            <tr>
                <th scope="col">Nombre de conducteurs</td>
                <th scope="col">Nombre de vehicules</td>
                <th scope="col">Nombre d'association</td>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td scope='row'><?php echo count($adminControllerInstance->afficherConducteurs()) ?></td>
                <td><?php echo count($adminControllerInstance->afficherVehicules()) ?></td>
                <td><?php echo count($adminControllerInstance->afficherVehicules()) ?></td>
            </tr>
        </tbody>
    </table>
    <div class='separator'></div>
    <table class='tableau table'>
        <caption align="top" style="text-align: center; color:black"><strong>Vehicules Libre</strong></caption>
        <thead>
            <tr style="border-top: 1px solid;border-color: inherit;">
                <th scope="col">id_vehicule</th>
                <th scope="col">marque</th>
                <th scope="col">modele</th>
                <th scope="col">couleur</th>
                <th scope="col">immatriculation</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php

            ?>
        </tbody>
    </table>
    <div class='separator'></div>
    <table class='tableau table'>
        <caption align="top" style="text-align: center; color:black"><strong>Conducteur Libre</strong></caption>
        <thead>
            <tr style="border-top: 1px solid;border-color: inherit;">
                <th>id_conducteur</th>
                <th>prenom</th>
                <th>nom</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php

            ?>
        </tbody>
    </table>
</div>