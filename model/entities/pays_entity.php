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