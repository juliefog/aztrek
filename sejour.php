<?php
require_once 'model/database.php';
require_once 'functions.php';





getMenu();
getHeader("pays", "la page des séjours du pays");

?>

        <!-- MAIN - slide sejour -->
        <div class="sejour-top">
            <h1 class="itineraire">Caminando Mexico</h1>
            <p>Bienvenue aux randonneurs pour une découverte énergisante du Mexique ! L’altiplano et les légendes de
                ses
                volcans majestueux, le Chiapas et son exubérante forêt tropicale, le Yucatán et ses inoubliables sites
                mayas constituent la colonne vertébrale de ce voyage conçu pour qui souhaite allier marche et culture.
            </p>

            <a href="#" class="tag tag-sejour">#Ascension volcanique</a>
            <img src="images/image_top_sejour.jpg" alt="caminando">
        </div>

        <div class="infos-sejour">
            <p>3 Jours</p>
            <img src="images/niveau_difficulte_2.png" alt="caminando">
            <p>A partir de <strong>1389€</strong></p>
        </div>


        <h2 class="itineraire">Itinéraire</h2>

        <div class="single-item">
            <div class="jour">
                <div class="jour-infos">
                    <h3>JOUR 1</h3>
                    <h4>Mexico - Puebla - La Venta (3300m)</h4>
                    <p>Le matin, nous prenons la route pour Puebla, deuxième ville du pays et important pôle économique
                        et universitaire. La visite du centre-ville, caractérisé par ses maisons coloniales couvertes
                        de « talaveras » (céramiques typiques de la région), est notamment ponctuée par la visite de la
                        chapelle du Rosaire, qui constitue un exemple remarquable de l’expression de l’architecture
                        baroque au Mexique, et de la bibliothèque Palafoxiana.<br>
                        Fondée en 1646, ce monument historique rassemble plus de 43000 volumes en hébreu, latin,
                        sanscrit ou grec. Transfert au refuge de La Venta (3300m) pour le dîner.</p>
                </div>
                <div class="jour-images">
                    <img src="images/image_sejour_slide_1.jpg" alt="caminando">
                    <img src="images/image_sejour_slide_2.jpg" alt="caminando">
                </div>
            </div>

            <div class="jour">
                <div class="bg-jour">
                    <div class="jour-infos">
                        <h3>JOUR 2</h3>
                        <h4>Ascension du volcan : La Malinche (4461m) - Mexico</h4>
                        <p>Départ nocturne pour l’ascension du volcan La Malinche. Le terrain, relativement facile
                            compte tenu de l’altitude, et la souplesse de l’organisation, rendent ce légendaire sommet
                            accessible au plus grand nombre. Il reste néanmoins une véritable ascension, et n écessite
                            donc une bonne préparation physique.<br>
                            D’abord sur une alternance de chemins assez larges et de sentiers qui sillonnent une forêt
                            de conifères, l’ascension devient plus escarpée à l’approche des 4000m mais ne présente pas
                            de grosse difficulté technique. </p>
                    </div>
                    <div class="jour-images">
                        <img src="images/image_sejour_slide_3.jpg" alt="caminandp">
                        <img src="images/image_sejour_slide_4.jpg" alt="caminando">
                    </div>
                </div>
            </div>
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
                        <th>DÉPART ASSURÉ</th>
                        <th>S'INSCRIRE</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>10/03/2019</td>
                        <td>14/03/2019</td>
                        <td>1389€</td>
                        <td>Assuré à partir de 4</td>
                        <td>
                            <a href="#" class="btn-reserve">S'inscrire</a>
                        </td>
                    </tr>

                    <tr>
                        <td>13/04/2019</td>
                        <td>17/04/2019</td>
                        <td>1389€</td>
                        <td> <strong>Assuré au prochain inscrit</strong></td>
                        <td><a href="#" class="btn-reserve">S'inscrire</a></td>
                    </tr>

                    <tr>
                        <td>09/06/2019</td>
                        <td>13/06/2019</td>
                        <td>1389€</td>
                        <td>Assuré à partir de 4</td>
                        <td><a href="#" class="btn-reserve">S'inscrire</a></td>
                    </tr>

                    <tr>
                        <td>13/07/2019</td>
                        <td>17/07/2019</td>
                        <td>2189€</td>
                        <td>Assuré à partir de 4</td>
                        <td><a href="#" class="btn-reserve">S'inscrire</a></td>
                    </tr>

                    <tr>
                        <td>11/08/2019</td>
                        <td>15/08/2019</td>
                        <td>2189€</td>
                        <td>Assuré à partir de 4</td>
                        <td><a href="#" class="btn-reserve">S'inscrire</a></td>
                    </tr>

                    <tr>
                        <td>19/09/2019</td>
                        <td>23/09/2019</td>
                        <td>1279€</td>
                        <td>Assuré à partir de 4</td>
                        <td><a href="#" class="btn-reserve">S'inscrire</a></td>
                    </tr>
                </tbody>
            </table>

            <p>Ces tarifs sont valables pour des départs de Paris, Rennes, Lyon et Nantes.</p>

            <a href="pays.php" class="btn">Retour aux séjours</a>
        </section>

        <!-- SECTION RESERVATION FIN -->


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
                    <a href="pays.php">Mexique</a>
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