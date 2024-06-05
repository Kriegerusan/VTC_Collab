<div class="container">
    <table class="table tableau">
        <thead>
            <tr>
                <hr>
                <th scope="col">id_association</th>
                <th scope="col">Conducteur</th>
                <th scope="col">Vehicule</th>
                <th scope="col">Editer</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tableauVehicule = [];
            $vehicule  = new Vehicule();
            $listevehicule = $vehicule->read("vehicule");
            foreach ($listevehicule as $key => $value) {
                $tableauVehicule[$value['id']] = $value['marque'] . " " . $value['modele'];
            }
            $conducteur  = new Conducteur();
            $listeConduc = $conducteur->read("conducteur");
            $tableauConducteur = [];
            foreach ($listeConduc as $key => $value) {
                $tableauConducteur[$value['id']] = $value['prenom'] . " " . $value['nom'];
            }
            foreach ($asso as $value) {
                echo "<tr>\n";
                echo "<td scope='row'>" . $value['id'] . "</td>\n";
                echo "<td>" . $tableauConducteur[$value['conducteur']] . "<p>" . $value['conducteur'] . "</p></td>\n";
                echo "<td>" . $tableauVehicule[$value['vehicule']] . "<p>" . $value['vehicule'] . "</p></td>\n";
                echo "<td><a href='?action=edit&id=" . $value['id']  . "&conducteur=" . $value['conducteur'] . "&vehicule=" . $value['vehicule'] . "'><i class='fa-solid fa-pen'></i></a></td>\n";
                echo "<td><a href='?action=delete&id=" . $value['id']  . "'><i class='fa-solid fa-x'></i></a></td>\n";
                echo "</tr>\n";
            }
            ?>
        </tbody>
    </table>
</div>