<?php
//On crée la fonction pour récupérer le mot de passe, qui est dans la fichier security pour se connecter en tant que admin :
//On écrit :email pour le protéger des injections sql.
//On met fetch seulement car c'est un seul utilisateur qu'on veut. On définie le mot qui est après les deux points.
function getUtilisateurByEmailMotDePasse(string $email, string $password){
    global $connection;

    $query ="
    SELECT *
    FROM utilisateur
    WHERE email = :email
    AND mdp = SHA1(:password)
    ";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
}



function insertUtilisateur(string $nom, string $prenom, string $email, string $mdp){

    global $connection;

    $query ="
    INSERT INTO utilisateur (nom, prenom, email, mdp)
    VALUES (:nom, :prenom, :email, SHA1(:mdp))";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mdp", $mdp);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":nom", $nom);
    $stmt->execute();

    return $stmt->execute();

}
