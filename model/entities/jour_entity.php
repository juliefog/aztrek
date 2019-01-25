<?php


//On recherche la liste des jours par séjour :

function getAllJoursBySejour($id)
{
    global $connection;

    $query = "
    SELECT 
    jour.*,
      sejour.titre AS sejour_titre
    FROM jour
    INNER JOIN sejour on jour.sejour_id = sejour.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}



//On insert un jour avec les paramètres qui suivent:
function insertJour(string $num_jour, string $sous_titre, string $description, string $image, string $image_second, string $sejour_id){

    global $connection;

    $query ="
    INSERT INTO jour (num_jour, sous_titre, description, image, image_second, sejour_id)
    VALUES (:num_jour, :sous_titre, :description, :image, :image_second, :sejour_id)";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":num_jour", $num_jour);
    $stmt->bindParam(":sous_titre", $sous_titre);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":image_second", $image_second);
    $stmt->bindParam(":sejour_id", $sejour_id);

    return $stmt->execute();
}