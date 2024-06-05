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
        echo "<td><button type='button' class='btn btn-primary suppressButton' data-bs-toggle='modal' data-bs-target='#deleteModal' value='" . $value['id'] . "'><i class='fa-solid fa-x'></i></button></a></td>\n";
        echo "</tr>\n";
      }
      ?>

      <!-- Button trigger modal -->


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