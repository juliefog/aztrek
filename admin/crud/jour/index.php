<?php
require_once '../../../model/database.php';

$jours = getAllJoursBySejour($id);

//Ereur dans une catégorie gérée ici:
$error_msg = null;
if (isset($_GET['errcode'])) {
    $errcode = $_GET['errcode'];
    switch ($errcode) {
        case 23000:
            $error_msg = "Erreur lors de la suppression !";
            break;
        default:
            $error_msg = "Une erreur est survenue !";
            break;
    }
}

require_once '../../layout/header.php';
?>

<h1>Gestion des étapes des itinéraires</h1>

<!--bouton:-->
<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>


<!--Si y a des erreur ça s'affiche:-->
<hr>

<?php if ($error_msg) : ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php echo $error_msg; ?>
    </div>
<?php endif; ?>

<table class="table table-striped table-bordered table-condensed">
    <thead class="thead-light">
        <tr>
            <th>Les jours</th>
            <th>Les séjours</th>
            <th>Sous-Titre</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jours as $jour) : ?>
            <tr>
                <td>Jour<?php echo $jour['num_jour']; ?></td>
                <td><?php echo $jour['sejour_titre']; ?></td>
                <td><?php echo $jour['sous_titre']; ?></td>
                <td class="actions">
                    <a href="update.php?id=<?php echo $jour['id']; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $jour['id']; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>