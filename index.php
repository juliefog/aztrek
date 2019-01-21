<?php
require_once 'model/database.php';
require_once 'functions.php';

getMenu();
getHeader("Accueil", "Aztrek site de voyages");

?>

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
                <a href="pays.php" class="pays mexique-carte">
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


      <?php getInstagram() ?>
      <?php getFooter() ?>