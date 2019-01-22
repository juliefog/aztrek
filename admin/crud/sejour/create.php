<?php
require_once '../../../model/database.php';

$liste_pays = getAllEntities("pays");
$difficultes = getAllEntities("difficulte");
$categories =getAllEntities("categorie");

require_once '../../layout/header.php';
?>

    <h1>Ajout d'un séjour</h1>

    <form action="create_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" value="titre" class="form-control" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label>Pays</label>
            <select name="pays_id"  value="pays_id" class="form-control">
                <?php foreach ($liste_pays as $liste_pay) : ?>
                    <option value="<?php echo $liste_pay["id"]; ?>">
                        <?php echo $liste_pay["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Catégorie</label>
            <select name="categorie_id" value="categorie_id" class="form-control">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category["id"]; ?>">
                        <?php echo $category["libelle"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>



        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" value="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Nombre de jours</label>
            <input type="number" name="nb_jour" value="nb_jour" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Niveau de difficulté</label>
            <select name="difficulte_id" value="difficulte_id" id="form-control">
                <?php foreach ($difficultes as $difficulte) : ?>
                    <option value="<?= $difficulte['id']; ?> ">
                        <?= $difficulte['niveau']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="form-group form-check">
            <input type="checkbox" name="publie" value="publie" class="form-check-input" required>
            <label>Publié ?</label>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>