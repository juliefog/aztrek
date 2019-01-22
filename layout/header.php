<?php
require_once "model/database.php";
$categories = getAllEntities("categorie");
$liste_pays = getAllEntities("pays");
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Aztrek | <?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,300i,400,400i,500,500i,600,600i,700,700i|Luckiest+Guy"
          rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">

    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel="stylesheet" href=" <?= $stylesheet; ?> ">
    <?php endforeach; ?>
</head>


<body>


<div class="corps">
    <!-- HEADER -->
    <header>
        <!-- slider -->
        <div id="carousel" class="owl-carousel owl-item slide-top img">
            <article class="item">
                <div class="item-img"><img src="images/slide_1_reseaux_sociaux.jpg" alt="reseaux sociaux"></div>
                <div class="slider-infos">
                    <h3>Suivez-nous sur les réseaux sociaux</h3>
                    <div class="reseaux">
                        <a href="#"><img src="images/instagram_header.png" alt="intagram aztrek"></a>
                        <a href="#"><img src="images/facebook_header.png" alt="facebook aztrek"></a>
                        <a href="#"><img src="images/twitter_header.png" alt="twitter aztrek"></a>
                        <a href="#"><img src="images/youtube_header.png" alt="youtube aztrek"></a>
                    </div>
                </div>
            </article>

            <article class="item">
                <div class="item-img"><img src="images/slide_2.jpg" alt="hashtag"></div>
                <div class="slider-infos">
                    <h3>#travelwithaztrek </h3>
                    <p>Utiliser notre hashtag pour qu’on vous suive dans vos circuits !</p>
                </div>
            </article>

            <article class="item">
                <div class="item-img"><img src="images/slide_3.jpg" alt="hashtag"></div>
                <div class="slider-infos">
                    <h3>Meilleur site de voyage du Trek latino</h3>
                </div>
            </article>
        </div>

        <!-- barre de recherche -->
        <div class="recherche">
            <select name="destinations" id="destinations">
                <option value>Destinations</option>
                <?php foreach ($liste_pays as $liste_pay) : ?>
                    <option value=" <?= $liste_pay["id"]; ?> "> <?= $liste_pay["nom"]; ?> </option>
                <?php endforeach; ?>
            </select>

            <select name="sejour" id="sejour">
                <option value>Circuits</option>
                <!-- On fait une boucle php foreach-->
                <?php foreach ($categories as $category) : ?>
                    <!-- On récupère l'id dans la value pour l'appeler dans l'URL en POST :-->
                    <option value="<?= $category["id"]; ?>">  <?= $category["libelle"]; ?></option>
                <?php endforeach; ?>
            </select>

            <button class="btn">Rechercher</button>
        </div>
    </header>