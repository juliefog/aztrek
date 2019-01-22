<?php
require_once 'model/database.php';
require_once 'functions.php';

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
$sejours= getAllSejoursByPays($id);



getMenu();
getHeader($pays["nom"], "la page des séjours du pays");

?>

        <!-- MAIN -->
        <main class="allsejour">
            <h1>Les circuits au <?= $pays["nom"]; ?></h1>
            <div class="sejours">

                <?php foreach ($sejours as $sejour) : ?>
                <div class="sejour">

                    <div class="item-sejour">
                        <img src="uploads/<?= $sejour["image"]; ?>" alt=" <?= $sejour["titre"]; ?>">
                        <a href="sejour.php?id=<?= $sejour["id"]; ?>" class="text-hover">
                            <p>GO !</p>
                        </a>
                    </div>

                    <div class="sejour-info">
                        <h2><?= $sejour["titre"]; ?></h2>
                        <a href="#" class="tag"> <?= $sejour["categorie"]; ?> </a>
                    </div>

                </div>
                <?php endforeach; ?>

        </main>
        <!-- MAIN FIN -->

       <?php
       getInstagram();
       getFooter();

       ?>
