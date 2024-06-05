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
            foreach ($listevehicule as $value) {
                $value['id'] = new Vehicule();
                $value['id']->setMarque($value['marque']);
                $value['id']->setModele($value['modele']);
                $value['id']->setCouleur($value['couleur']);
                $value['id']->setImmatriculation($value['immatriculation']);
                $tableauVehicule[] = $value['id'];
            }
            $conducteur  = new Conducteur();
            $listeConduc = $conducteur->read("conducteur");
            $tableauConducteur = [];
            foreach ($listeConduc as $value) {
                $value['id'] = new Conducteur();
                $value['id']->setPrenom($value['prenom']);
                $value['id']->setNom($value['nom']);
                $tableauConducteur[] = $value['id'];
            }
            foreach ($asso as $value) {
                echo "<tr>\n";
                echo "<td scope='row'>" . $value['id'] . "</td>\n";
                echo "<td>" . $tableauConducteur[$value['conducteur'] - 1] . "<p>" . $value['conducteur'] . "</p></td>\n";
                echo "<td>" . $tableauVehicule[$value['vehicule'] - 501] . "<p>" . $value['vehicule'] . "</p></td>\n";
                echo "<td><a href='?action=edit&id=" . $value['id']  . "&conducteur=" . $value['conducteur'] . "&vehicule=" . $value['vehicule'] . "'><i class='fa-solid fa-pen'></i></a></td>\n";
                echo "<td><a href='?action=delete&id=" . $value['id']  . "'><i class='fa-solid fa-x'></i></a></td>\n";
                echo "</tr>\n";
            }
            ?>
        </tbody>
    </table>
</div>