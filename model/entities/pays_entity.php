<?php

//On insert un pays avec le paramètre nom:
function insertPays(string $nom)
{
    global $connection;

//    On veut envoyer des données dans la base de données (on sécurise la valeur nom)
    $query = "INSERT INTO pays(nom) VALUES (:nom)";


    //On prépare et exécute la requête: (avec le binparam on associe le :nom à la variable $nom)
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->execute();
}


//On met à jour un pays existant sur les paramètre id et nom:
function updatePays(INT $id, string $nom){
    global $connection;

    $query ="UPDATE pays 
    SET nom = :nom 
    WHERE id = :id ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}



//function getAllPays(){
//    global $connection;
//
//    $query = "
//    SELECT
//    pays.*
//    FROM pays
//    GROUP BY pays.id
//    ";
//
//    $stmt = $connection->prepare($query);
//    $stmt->bindParam(":pays", $pays);
//    $stmt->execute();
//
//    return $stmt->fetchAll();
//}