<div class="container">
    <form method="post" action="">
        <label for="">Conducteur</label><br>
        <select name="conducteur" id="">
            <?php
            foreach ($listeConduc as $liste) {
                echo "<option value='" . $liste['id'] . "'>" . $liste['prenom'] . " " . $liste['nom'] . "</option>";
            }
            ?>
        </select><br>
        <label for="">Vehicule</label><br>
        <select name="vehicule" id="">
            <?php
            foreach ($listevehicule as $liste) {
                echo "<option value='" . $liste['id'] . "'>" . $liste['marque'] . " " . $liste['modele'] . "</option>";
            }
            ?>
        </select><br>
        <button type="submit" class="btn btn-light">Ajouter cette association</button>
    </form>
</div>