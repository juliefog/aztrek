<?php require_once '../../layout/header.php';

$jours = getAllJoursBySejour ($id)


?>

<h1>Ajouter un jour</h1>

<form action="create_query.php" method="POST">
    <div class="form-group">
        <label>Numéro du jour</label>
        <input type="number" name="number" value="num_jour" class="form-control" placeholder="numéro du jour" required>
    </div>


    <div class="form-group">
        <label>Séjour correspondant</label>
        <select name="sejour_id"  class="form-control">
            <?php foreach ($jours as $jour) : ?>
                <option value="<?php echo $jour["id"]; ?>">
                    <?php echo $jour["sejour_titre"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Sous-titre</label>
        <input type="text" name="titre" value="sous_titre" class="form-control" placeholder="Titre" required>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Image Principale</label>
        <input type="file" name="image" value="image" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Image Secondaire</label>
        <input type="file" name="image" value="image_second" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>