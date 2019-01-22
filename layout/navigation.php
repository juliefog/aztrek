
<!-- NAV -->
<?php
require_once __DIR__. "/../config/parameters.php";
require_once __DIR__. "/../functions.php";
require_once __DIR__ . "/../model/database.php";

$liste_pays = getAllEntities("pays");
$user = getCurrentUser();
?>


<nav class="main-nav">
    <div class="logo-nav">
        <a href="index.php"><img src="images/logo_blanc.svg" alt="Aztrek"></a>
    </div>

    <!-- menu toggle -->
    <a class="burger" href="#sidr-main" data-target=".main-menu">
        <img src="images/menu.svg" alt="menu aztrek">
    </a>

    <div class="main-menu">

        <ul class="nav">
            <!-- nav1 -->
            <li class="has-sublist"><a href="#" class="nav-1">
                    <h3>Nos destinations</h3>
                </a>

                <ul class="nav-2">
                    <?php foreach ($liste_pays as $liste_pay) :?>
                    <li><a href="pays.php?id=<?= $liste_pay["id"]; ?>"><?= $liste_pay["nom"]; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>

            <!-- nav2 -->
            <li class="has-sublist"><a href="#" class="nav-1">
                    <h3>Vos partages</h3>
                </a>


                <ul class="nav-2">
                    <li><a href="#">Vos photos</a></li>
                    <li><a href="#">Vos témoignages</a></li>
                    <li><a href="#">Vos conseils</a></li>
                </ul>
            </li>

            <!-- nav3 -->
            <li><a href="#" class="nav-1">
                    <h3>Qui sommes-nous?</h3>
                </a></li>

            <!-- nav4 -->
            <li class="has-sublist">
           <?php if (isset($user)) : ?>
            <li><a href="#" class="nav-1"><i class="fa fa-user"></i>
                    <h3> <?= $user['prenom']; ?></h3></a></li>

            <li><a href="<?= SITE_ADMIN . "logout.php"; ?>" class="nav-1">
                    <h3>Déconnexion </h3></a></li>
            <?php else:  ?>
               <li><a href="<?= SITE_ADMIN; ?>"><h3>Se connecter</h3></a></li>
                <li><a href="<?= SITE_URL . "create_account.php"; ?>"><h3>S'inscrire</h3></a></li>
           <?php endif; ?>

            </li>

            <!-- nav5 -->
            <li class="has-sublist"><a href="#" class="nav-1">
                    <h3>Contactez-nous</h3>
                </a>
                <ul class="nav-2">
                    <li><a href="#">Demander un devis</a></li>
                    <li><a href="#">Formulaire de contact</a></li>
                    <li><a href="#">02 99 00 00 00</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <a href="#" class="langue">
        <h3>FR</h3>
    </a>
</nav>
