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


//Permet de modifier une catégorie dans l'admin:
function updateCategorie(INT $id, string $libelle){
    global $connection;

    $query ="UPDATE categorie 
    SET libelle = :libelle 
    WHERE id = :id ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}