<div class="container">
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
        <tbody>

            <?php
            foreach ($conduc as $value) {
                echo "<tr>\n";
                echo "<td scope='row'>" . $value['id'] . "</td>\n";
                echo "<td>" . $value['prenom'] . "</td>\n";
                echo "<td>" . $value['nom'] . "</td>\n";
                echo "<td><a href='?action=edit&id=" . $value['id']  .  "&prenom=" . $value['prenom'] . "&nom=" . $value['nom'] . "'><i class='fa-solid fa-pen'></a></td>\n";
                // echo "<td><a href='?action=delete&id=" . $value['id'] . "' '><i class='fa-solid fa-x'></a></td>\n";
                echo "<td><button type='button' class='btn btn-link btn-sm' data-bs-toggle='modal' data-bs-target='#deleteModal' data-bs-whatever='" . $value['id'] . "'><i class='fa-solid fa-x'></button></td>\n";
                echo "</tr>\n";
            }
            ?>
        </tbody>
    </table>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Suppression d'un conducteur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input hidden type="text" name="id" class="form-control" value="Recipient">
                            <input hidden type="text" name="action" class="form-control" value="delete">
                        </div>
                        <p class="text-danger">Etes vous sur de vouloir supprimer le conducteur?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger">OUI supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/index.js"></script>