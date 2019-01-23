<?php

function insertPays(string $nom)
{
    global $connection;

//    On veut envoyer des données dans la base de données (on sécurise la valeur libelle)
    $query = "INSERT INTO pays(nom) VALUES (:nom)";


    //On prépare et exécute la requête: (avec le binparam on associe le :libelle à la variable $libelle)
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->execute();
}

//Permet de modifier un pays dans l'admin:
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



//function getAllPays(string $pays){
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