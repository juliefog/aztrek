<?php
require_once 'model/database.php';
require_once 'functions.php';

$id = $_GET["id"];
$sejour = getOneSejour($id);
$etapes = getAllEtapesBySejour($id);
$departs = getAllDepartsBySejour($id);



getMenu();
getHeader("pays", "la page des séjours du pays");

?>

    <!-- MAIN -->
    <div class="sejour-top">
        <h1 class="itineraire"><?= $sejour["titre"]; ?></h1>
        <p> <?= $sejour['description']; ?> </p>

        <a href="#" class="tag tag-sejour"> #<?= $sejour['categorie']; ?> </a>
        <img src="uploads/<?= $sejour['image']; ?>" alt=" <?= $sejour["titre"]; ?> ">
    </div>

    <div class="infos-sejour">
        <p> <?= $sejour['nb_jour']; ?> jours </p>

        <p>
            <?php $difficulte = $sejour['difficulte']; ?>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <?php if ($i <= $difficulte) : ?>
                    <i class="fa fa-star"></i>
                <?php else: ?>
                    <i class="fa fa-star-O"></i>
                <?php endif; ?>
            <?php endfor; ?>
        </p>

        <!--            <p> Niveau : --><? //= $sejour['difficulte']; ?><!--</p>-->

        <p>A partir de <?= $sejour['prix']; ?> € </p>
    </div>


    <h2 class="itineraire">Itinéraire</h2>

    <div class="single-item">

        <?php foreach ($etapes as $etape) : ?>
            <div class="jour">
                <div class="jour-infos">
                    <h3> Jour <?= $etape['num_jour']; ?></h3>
                    <h4> <?= $etape['sous_titre']; ?> </h4>
                    <p> <?= $etape['description']; ?> </p>
                </div>
                <div class="jour-images">
                    <img src="uploads/<?= $etape['image']; ?> " alt="<?= $sejour["titre"]; ?>">
                    <img src="uploads/<?= $etape['image_second']; ?>" alt="<?= $sejour["titre"]; ?>">
                </div>
            </div>
        <?php endforeach; ?>


    </div>

    <!-- MAIN FIN -->

    <!-- SECTION RESERVATION -->

    <section class="reservation">
        <h2 class="itineraire">Périodes de départs et prix</h2>
        <table>
            <thead>
            <tr>
                <th>DU</th>
                <th>AU</th>
                <th>PRIX ADULTE</th>
                <th>NOMBRE DE PLACE RESTANTE</th>
                <th>S'INSCRIRE</th>
            </tr>
            </thead>

            <tbody>

            <?php foreach ($departs as $depart) :?>
            <tr>
                <td> <?= $depart['date_depart']; ?></td>
                <td> <?= $depart['date_arrive']; ?> </td>
                <td><?= $depart['prix']; ?> €</td>


                <td> <?= $depart['place_restantes']; ?></td>


                <td>
                    <a href="#" class="btn-reserve">S'inscrire</a>
                </td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>

        <p>Ces tarifs sont valables pour des départs de Paris, Rennes, Lyon et Nantes.</p>

        <a href="pays.php" class="btn">Retour aux séjours</a>
    </section>

    <!-- SECTION RESERVATION FIN -->

<?php getFooter() ?>