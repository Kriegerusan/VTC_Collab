<div class="container">
    <form method="post">
        <div class="mb-3">
            <label for="conducteur" class="form-label">Prenom</label>
            <input type="text" placeholder="prenom" class="form-control" id="conducteur" name="prenom" value="<?= $_GET['prenom'] ?>">
        </div>
        <div class="mb-3">
            <label for="conducteur" class="form-label">Nom</label>
            <input type="text" placeholder="nom" class="form-control" id="conducteur" name="nom" value="<?= $_GET['nom'] ?>">
        </div>
        <button type="submit" class="btn btn-light">Modifier ce conducteur</button>
    </form>
</div>