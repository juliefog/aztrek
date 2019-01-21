<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
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
            <img src="images/logo_blanc.svg" alt="Aztrek">
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
                    <option value="Trek et beignades">Trek et beignades</option>
                    <option value="Découvertes animales">Découvertes animales</option>
                </select>
                <button class="btn">Rechercher</button>
            </div>
        </header>

        <!-- SECTION POPULAIRE -->
        <section id="populaire">
            <div class="populaire-item">
                <h2>Les circuits les plus populaires</h2>

                <div class="populaire-img">
                    <div class="pays-pop">
                        <a href="#"><img class="image" src="images/photo_guatemala.jpg" alt="Aztrek Guatemala"></a>
                        <h4><span class="capital">Guatemala</span> - Panajachel</h4>

                        <div class="texte-hover">
                            <ul>
                                <li>Plus de 120 voyageurs aztrek</li>
                                <li>Une vue improbable sur le lac Atitlan</li>
                                <li>Un volcan à couper le souffle</li>
                            </ul>
                            <a href="#" class="popbtn">Voir le circuit</a>
                        </div>
                    </div>

                    <div class="pays-pop">
                        <a href="#"><img class="image" src="images/photo_mexique.jpg" alt="Aztrek Mexique"></a>
                        <h4><span class="capital">Mexique</span> - Yucatan</h4>

                        <div class="texte-hover">
                            <ul>
                                <li>Plus de 70 voyageurs aztrek</li>
                                <li>Une architechture impressionnante</li>
                                <li>une ascension volcanique de niveau !</li>
                            </ul>
                            <a href="#" class="popbtn">Voir le circuit</a>
                        </div>
                    </div>


                    <div class="pays-pop">
                        <a href="#"><img class="image" src="images/photo_costarica.jpg" alt="Aztrek Costa Rica"></a>
                        <h4><span class="capital">Costa Rica</span> - Toucans et plage</h4>

                        <div class="texte-hover">
                            <ul>
                                <li>Plus de 60 Voyageurs aztrek</li>
                                <li>Des forêts à perte de vue</li>
                                <li>Une diversité animale impressionnante</li>
                            </ul>
                            <a href="#" class="popbtn">Voir le circuit</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAIN -->
        <main class="aztrek">
            <div class="logo-section"><img src="images/logo_orange.svg" alt="Aztrek"></div>
            <h1>Bienvenidos sur Aztrek, le site de voyage et de partage d'expériences en Amérique latine !</h1>
            <div class="main-item">
                <article class="savoir item"><i class="fas fa-globe-americas"></i>
                    <p>Nous vous faisons voyager depuis 2016 en prodiguant l'écotourisme responsable ! Nous
                        élaborons
                        nous-mêmes les circuits à l'aide des locaux !</p>
                    <a href="#" class="btn">en savoir plus</a>
                </article>
                <article class="destinations item"><i class="fas fa-campground"></i>
                    <p>Aztrek vous propose de découvrir le Mexique, le Guatémala, le Salvador, l’Honduras et le
                        Costa
                        Rica à travers des Trek les plus impressionnant les uns des autres.</p>
                    <a href="#" class="btn">Nos destinations</a>
                </article>
                <article class="partages item"><i class="fas fa-users"></i>
                    <p>Partagez avec nous et entre vous vos plus belles photos, vos témoignages et n’hésitez pas à
                        conseiller les autres Aztrekkeurs !</p>
                    <a href="#" class="btn">Vos partages</a>
                </article>
            </div>
        </main>

        <!-- SECTION CARTE -->
        <section class="carte">

            <div class="info-carte">
                <h2>Nos destinations</h2>
                <p>cliquez sur nos destinations pour découvrir les différents circuits.</p>
            </div>
            <div class="carte-img">
                <?php include('carte.svg') ?>
            </div>
            <div class="carte-item">
                <a href="pays.html" class="pays mexique-carte">
                    <div class="item-pays">
                        <p>Mexique</p>
                        <img src="images/soleil-blanc.svg" alt="aztrek">
                    </div>
                </a>

                <a href="#" class="pays guatemala-carte">
                    <div class="item-pays">
                        <p>Guatémala</p>
                        <img src="images/soleil-blanc.svg" alt="aztrek">
                    </div>
                </a>

                <a href="#" class="pays salvador-carte">
                    <div class="item-pays">
                        <p>Salvador</p>
                        <img src="images/soleil-blanc.svg" alt="aztrek">
                    </div>
                </a>

                <a href="#" class="pays honduras-carte">
                    <div class="item-pays">
                        <p>Honduras</p>
                        <img src="images/soleil-blanc.svg" alt="aztrek">
                    </div>
                </a>

                <a href="#" class="pays costarica-carte">
                    <div class="item-pays">
                        <p>Costa Rica</p>
                        <img src="images/soleil-blanc.svg" alt="aztrek">
                    </div>
                </a>
            </div>
            <h3>Un nouveau monde à chaque pas!</h3>
        </section>

        <!-- SECTION INSTA -->
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
                        <img src="images/logo_jaune_petit.svg" alt="Aztrek">
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