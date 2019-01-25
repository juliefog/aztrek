<?php
require_once '../../../model/database.php';
//On récupère l'id de l'URL, le séjour, l'ensemble des catégories, des pays et des difficultés:
$id = $_GET['id'];
$sejours = getOneEntity("sejour", $id);
$liste_categories = getAllEntities("categorie");
$liste_pays = getAllEntities("pays");
$difficultes = getAllEntities("difficulte");

require_once '../../layout/header.php';
?>

<h1>Modification d'un séjour</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $sejours["titre"]; ?>" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if ($sejours["image"]) : ?>
            <img src="../../../uploads/<?php echo $sejours["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $sejours["description"]; ?></textarea>
    </div>
    <div class="form-group">
        <label>Catégorie</label>
        <select name="categorie_id" class="form-control">
            <?php foreach ($liste_categories as $category) : ?>
                <?php $selected = ($category["id"] == $sejours["categorie_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $category["id"]; ?>" <?php echo $selected; ?>>
                    <?php echo $category["libelle"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Pays</label>
        <select name="pays_id" class="form-control">
            <?php foreach ($liste_pays as $pays) : ?>
                <?php $selected = ($pays["id"] == $sejours["pays_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $pays["id"]; ?>" <?php echo $selected; ?>>
                    <?php echo $pays["nom"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Difficulté</label>
        <select name="difficulte_id" class="form-control">
            <?php foreach ($difficultes as $difficulte) : ?>
                <?php $selected = ($difficulte["id"] == $difficulte["difficulte_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $difficulte["id"]; ?>" <?php echo $selected; ?>>
                    <?php echo $difficulte["niveau"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Nombre de jours</label>
        <input type="number" name="nb_jour" value="<?php echo $sejours["nb_jour"]; ?>" class="form-control" placeholder="nombre de jour" required>
    </div>


    <input type="hidden" name="id" value="<?php echo $id; ?>">




    <div class="form-group form-check">
        <input type="checkbox" name="publie" value="on" class="form-check-input" <?= ($sejours['publie']==1) ? 'checked' : '' ?>>
        <label>Publié ?</label>
    </div>

    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>