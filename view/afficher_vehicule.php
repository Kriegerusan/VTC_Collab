<div class="container table-responsive-sm">
    <table class="table tableau">
        <thead>
            <tr>
                <hr>
                <th scope="col">id_conducteur</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Couleur</th>
                <th scope="col">Immatriculation</th>
                <th scope="col">Editer</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php
            foreach ($voiture as $value) {
                echo "<tr>\n";
                echo "<td scope='row'>" . $value['id'] . "</td>\n";
                echo "<td>" . $value['marque'] . "</td>\n";
                echo "<td>" . $value['modele'] . "</td>\n";
                echo "<td>" . $value['couleur'] . "</td>\n";
                echo "<td>" . $value['immatriculation'] . "</td>\n";
                echo "<td><a href='?action=edit&id=" . $value['id']  .  "&marque=" . $value['marque'] . "&modele=" . $value['modele'] . "&couleur=" . $value['couleur'] . "&immatriculation=" . $value['immatriculation'] . "'><i class='fa-solid fa-pen'></a></td>\n";
                echo "<td><a href='?action=delete&id=" . $value['id']  . "'><i class='fa-solid fa-x'></a></td>\n";
                echo "</tr>\n";
            }
            ?>
        </tbody>
    </table>
</div>