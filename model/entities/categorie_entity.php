<?php

function insertCategorie(string $libelle){

    global $connection;

//    On veut envoyer des données dans la base de données (on sécurise la valeur libelle)
    $query ="INSERT INTO categorie(libelle) VALUES (:libelle)";


    //On prépare et exécute la requête: (avec le binparam on associe le :libelle à la variable $libelle)
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
}


