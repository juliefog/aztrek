<!--Afficher la page séjour-->
<?php


//Pour afficher tous les séjours dans une page pays:

function getAllJoursBySejour($id)
{
    global $connection;

    $query = "
    SELECT 
    jour.*,
      sejour.id AS sejour,
      sejour.titre AS sejour_titre
    FROM jour
    INNER JOIN sejour on jour.sejour_id = sejour.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}


