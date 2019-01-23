<?php
require_once '../../../model/database.php';

$departs = getAllDeparts();

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

<h1>Gestion des départs</h1>

<!--bouton:-->
<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>


<!--Si y a des erreurs ça s'affiche:-->
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
            <th>Date de départ</th>
            <th>Prix</th>
            <th>Nombre de places</th>
            <th>Séjours</th>
            <th>Pays</th>
            <th class="actions">Actions</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($departs as $depart) : ?>
            <tr>
                <td><?php echo $depart['date_depart']; ?></td>
                <td> <?= $depart['prix']; ?></td>
                <td> <?= $depart['nb_places']; ?></td>
                <td> <?= $depart['sejour']; ?></td>
                <td> <?= $depart['pays']; ?></td>

                <td class="actions">
                    <a href="update.php?id=<?php echo $depart['id']; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $depart['id']; ?>">
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