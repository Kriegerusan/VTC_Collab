<div class="container">
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
        <tbody>

            <?php
            foreach ($voiture as $value) {
                echo "<tr>\n";
                echo "<td scope='row'>" . $value['id'] . "</td>\n";
                echo "<td>" . $value['marque'] . "</td>\n";
                echo "<td>" . $value['modele'] . "</td>\n";
                echo "<td>" . $value['couleur'] . "</td>\n";
                echo "<td>" . $value['immatriculation'] . "</td>\n";
                echo "<td><a href='?action=edit&id=" . $value['id']  .  "&marque=" . $value['marque'] . "&modele=" . $value['modele'] . "&couleur=" . $value['couleur'] . "&immatriculation=" . $value['immatriculation'] . "'><i class='fa-solid fa-pen'></a></td>\n";
                echo "<td><button type='button' class='btn btn-link suppressButton' data-bs-toggle='modal' data-bs-target='#deleteModal' value='" . $value['id'] . "'><i class='fa-solid fa-x'></i></button></a></td>\n";
                echo "</tr>\n";
            }
            ?>
        </tbody>
    </table>

    
      <!-- Modal -->
      <form>
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Etes vous sur de vouloir supprimer cet element ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">retour</button>
                <button type="button" class="btn btn-primary btn-danger" id='confirm'>Confirmer</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </tbody>
  </table>
</div>
<script src="../js/deleteModal.js"></script>
</div>