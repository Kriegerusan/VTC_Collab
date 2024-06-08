<div class="container table-responsive-sm">
    <table class="table tableau">
        <thead>
            <tr>
                <hr>
                <th scope="col">id_conducteur</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Editer</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php
            foreach ($conduc as $value) {
                echo "<tr>\n";
                echo "<td scope='row'>" . $value['id'] . "</td>\n";
                echo "<td>" . $value['prenom'] . "</td>\n";
                echo "<td>" . $value['nom'] . "</td>\n";
                echo "<td><a href='?action=edit&id=" . $value['id']  .  "&prenom=" . $value['prenom'] . "&nom=" . $value['nom'] . "'><i class='fa-solid fa-pen'></a></td>\n";
                // echo "<td><a href='?action=delete&id=" . $value['id'] . "' '><i class='fa-solid fa-x'></a></td>\n";
                echo "<td><a href='?action=delete&id=" . $value['id'] . "'><i class='fa-solid fa-x'></button></td>\n";
                echo "</tr>\n";
            }
            ?>
        </tbody>
    </table>