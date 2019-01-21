<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,300i,400,400i,500,500i,600,600i,700,700i|Luckiest+Guy"
        rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <title>Accueil | Aztrek</title>
</head>


<body>

    <!-- NAV -->

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
                        <li><a href="pays.html">Mexique</a></li>
                        <li><a href="#">Guatemala</a></li>
                        <li><a href="#">Salvador</a></li>
                        <li><a href="#">Honduras</a></li>
                        <li><a href="#">Costa Rica</a></li>
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
                <li class="has-sublist"><a href="#" class="nav-1">
                        <h3>Mon compte</h3>
                    </a>
                    <ul class="nav-2">
                        <li><a href="#">Mes devis</a></li>
                        <li><a href="#">Mes infos</a></li>
                    </ul>
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
    <div class="corps">

        <!-- HEADER -->
        <header>
            <!-- slider -->
            <div id="carousel" class="owl-carousel owl-theme">
                <article class="item">
                    <div class="item-img"><img src="images/slide_1_reseaux_sociaux.jpg" alt="reseaux sociaux"></div>
                    <div class="slider-infos">
                        <h3>Suivez-nous sur les réaseaux sociaux</h3>
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
                    <option value="Mexique">Mexique</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Salvador">Salvador</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Costa Rica">Costa Rica</option>
                </select>

                <select name="Circuits" id="Circuits">
                    <option value>Circuits</option>
                    <option value="Trek de l'extreme">Trek de l'extrême</option>
                    <option value="Ascension volcanique">Ascension volcanique</option>
                    <option value="Trek de promenade">Trek de promenade</option>
                    <option value="Trek et beignades">Trek et baignades</option>
                    <option value="Découvertes animales">Découvertes animales</option>
                </select>
                <button class="btn">Rechercher</button>
            </div>
        </header>

        <!-- MAIN -->
        <main class="allsejour">
            <h1>Les circuits au Mexique</h1>
            <div class="sejours">


                <div class="sejour">
                    <div class="item-sejour">
                        <img src="images/sejour1_mexique.jpg" alt="mexique">
                        <a href="#" class="text-hover">
                            <p>GO !</p>
                        </a>
                    </div>

                    <div class="sejour-info">
                        <h2>Découverte des Marchés</h2>
                        <a href="#" class="tag">#Trek de promenade</a>
                        <p>A partir de 1582 €</p>
                    </div>
                </div>


                <div class="sejour">
                    <div class="item-sejour">
                        <a href=""><img src="images/sejour2_mexique.jpg" alt="mexique"></a>
                        <a href="#" class="text-hover">
                            <p>GO !</p>
                        </a>
                    </div>

                    <div class="sejour-info">
                        <h2>Trek sur les côtes</h2>
                        <a href="#" class="tag">#Trek et baignades</a>
                        <p>A partir de 2000 €</p>
                    </div>
                </div>


                <div class="sejour">
                    <div class="item-sejour">
                        <img src="images/sejour3_mexique.jpg" alt="mexique">
                        <a href="sejour.html" class="text-hover">
                            <p>GO !</p>
                        </a>
                    </div>

                    <div class="sejour-info">
                        <h2>Caminando Mexico</h2>
                        <a href="#" class="tag">#Ascension volcanique</a>
                        <p>A partir de 1389 €</p>
                    </div>
                </div>


                <div class="sejour">
                    <div class="item-sejour">
                        <img src="images/sejour4_mexique.jpg" alt="mexique">
                        <a href="#" class="text-hover">
                            <p>GO !</p>
                        </a>
                    </div>
                    <div class="sejour-info">
                        <h2>Trésors du Yucatan</h2>
                        <a href="#" class="tag">#Trek de l'extrême</a>
                        <p>A partir de 1856 €</p>
                    </div>
                </div>


                <div class="sejour">
                    <div class="item-sejour">
                        <img src="images/sejour5_mexique.jpg" alt="mexique">
                        <a href="#" class="text-hover">
                            <p>GO !</p>
                        </a>
                    </div>

                    <div class="sejour-info">
                        <h2>Les Cénotes</h2>
                        <a href="#" class="tag">#Trek et beignades</a>
                        <p>A partir de 1950 €</p>
                    </div>
                </div>


                <div class="sejour">
                    <div class="item-sejour">
                        <img src="images/sejour6_mexique.jpg" alt="mexique">
                        <a href="#" class="text-hover">
                            <p>GO !</p>
                        </a>
                    </div>

                    <div class="sejour-info">
                        <h2>Les volcans</h2>
                        <a href="#" class="tag">#Ascension volcanique</a>
                        <p>A partir de 2050 €</p>
                    </div>
                </div>

            </div>


        </main>
        <!-- MAIN FIN -->

        <section class="insta">
            <h2>#travelwithaztrek</h2>
            <p class="insta-texte">Utilisez notre hashtag <strong>#travelwithaztrek</strong> sur vos réseaux sociaux
                pour qu’on puisse vous
                suivre !
                Nous re-postons vos plus belles photos sur notre compte Instagram <strong>AZTREKGO.</strong></p>
            <div class="item-insta">
                <div class="insta">
                    <img src="images/photo_insta_1.jpg" alt="instagram aztrek">
                    <div class="text-hover">
                        <p>@Fredandco</p>
                        <p><i class="fas fa-heart"></i>1100</p>
                        <p><i class="far fa-comment-dots"></i>300</p>
                    </div>
                </div>

                <div class="insta">
                    <img src="images/photo_insta_2.jpg" alt="instagram aztrek">
                    <div class="text-hover">
                        <p>@Maximetravel</p>
                        <p><i class="fas fa-heart"></i>600</p>
                        <p><i class="far fa-comment-dots"></i>300</p>
                    </div>
                </div>

                <div class="insta">
                    <img src="images/photo_insta_3.jpg" alt="instagram aztrek">
                    <div class="text-hover">
                        <p>@Verotrek</p>
                        <p><i class="fas fa-heart"></i>1000</p>
                        <p><i class="far fa-comment-dots"></i>200</p>
                    </div>
                </div>

                <div class="insta">
                    <img src="images/photo_insta_4.jpg" alt="instagram aztrek">
                    <div class="text-hover">
                        <p>@Samandtom</p>
                        <p><i class="fas fa-heart"></i>500</p>
                        <p><i class="far fa-comment-dots"></i>80</p>
                    </div>
                </div>

                <div class="insta">
                    <img src="images/photo_insta_5.jpg" alt="instagram aztrek">
                    <div class="text-hover">
                        <p>@Axeltravelgo</p>
                        <p><i class="fas fa-heart"></i>1300</p>
                        <p><i class="far fa-comment-dots"></i>400</p>
                    </div>
                </div>

                <div class="insta">
                    <img src="images/photo_insta_6.jpg" alt="instagram aztrek">
                    <div class="text-hover">
                        <p>@arthurtrekk</p>
                        <p><i class="fas fa-heart"></i>400</p>
                        <p><i class="far fa-comment-dots"></i>30</p>
                    </div>
                </div>

                <div class="insta">
                    <img src="images/photo_insta_7.jpg" alt="instagram aztrek">
                    <div class="text-hover insta-7-item">
                        <p>@trekkeurlife</p>
                        <p><i class="fas fa-heart"></i>10000</p>
                        <p><i class="far fa-comment-dots"></i>1005</p>
                    </div>
                </div>
                <div class="insta">
                    <img src="images/photo_insta_8.jpg" alt="instagram aztrek">
                    <div class="text-hover insta-8-item">
                        <p>@Mellisatravel</p>
                        <p><i class="fas fa-heart"></i>599</p>
                        <p><i class="far fa-comment-dots"></i>100</p>
                    </div>
                </div>
            </div>

            <div class="texte-conseils">
                <p>Retrouvez également les conseils des Aztrekkeurs sur les différents circuits</p>
                <a href="#" class="btn">vos conseils</a>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <div class="item-footer">
                <div class="item1-footer">
                    <div class="logo-footer">
                        <a href="index.php"><img src="images/logo_jaune_petit.svg" alt="Aztrek"></a>
                    </div>
                    <a href="#">Qui sommes-nous ?</a>
                </div>

                <div class="item2-footer">
                    <div class="newsletter">
                        <p>Newsletter</p>
                        <input type="email" name="email" id="email" placeholder="votre email">
                        <button class="btn" type="submit">S'abonner</button>
                    </div>
                    <div class="reseau-footer">
                        <img src="images/instagram-footer.png" alt="instagram aztrek">
                        <img src="images/facebook-footer.png" alt="facebook aztrek">
                        <img src="images/twitter-footer.png" alt="twitter aztrek">
                        <img src="images/youtube-footer.png" alt="youtube aztrek">
                    </div>
                </div>

                <div class="item3-footer">
                    <a href="#">Mention légales</a>
                    <p>Nos destinations</p>
                    <a href="pays.html">Mexique</a>
                    <a href="#">Guatemala</a>
                    <a href="#">Salvador</a>
                    <a href="#">Honduras</a>
                    <a href="#">Costa Rica</a>
                </div>
            </div>
        </footer>
    </div>


</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.sidr.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scripts.js"></script>

</html>