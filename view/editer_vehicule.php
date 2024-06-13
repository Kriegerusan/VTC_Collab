<div id="editVehicule" class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="conducteur" class="form-label">marque</label>
            <input type="text" placeholder="marque" class="form-control" id="conducteur" name="marque" value="<?= $_GET['marque'] ?>">
        </div>
        <div class="mb-3">
            <label for="conducteur" class="form-label">modele</label>
            <input type="text" placeholder="modele" class="form-control" id="conducteur" name="modele" value="<?= $_GET['modele'] ?>">
        </div>
        <div class="mb-3">
            <label for="conducteur" class="form-label">couleur</label>
            <input type="text" placeholder="couleur" class="form-control" id="conducteur" name="couleur" value="<?= $_GET['couleur'] ?>">
        </div>
        <div class="mb-3">
            <label for="conducteur" class="form-label">immatriculation</label>
            <input type="text" placeholder="immatriculation" class="form-control" id="conducteur" name="immatriculation" value="<?= $_GET['immatriculation'] ?>">
        </div>
        <div class="mb-3">
            <label for="conducteur" class="form-label">Photo</label>
            <input type="file" class="form-control" id="conducteur" name="photo" accept=".jpg,.png">
        </div>
        <button type="submit" class="btn btn-light">Modifier ce vehicule</button>
    </form>
</div>