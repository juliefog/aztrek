<?php
// On recherche la liste de tous les départs:
function getAllDeparts()
{
    global $connection;

//Enregistrement de la requête sql dans la variable query:
    $query = "
    SELECT 
        depart.*,
        DATE_ADD(depart.date_depart, INTERVAL sejour.nb_jour DAY ) AS date_arrive,
        sejour.titre AS sejour,
        pays.nom AS pays,
        depart.nb_places - IFNULL(SUM(reservation.nb_places), 0) AS place_restantes
    FROM depart
    INNER JOIN sejour on depart.sejour_id = sejour.id
      INNER JOIN pays on sejour.pays_id = pays.id
    LEFT JOIN reservation ON depart.id = reservation.depart_id
    GROUP BY depart.id
    ";

//Préparation et excution de la requête:
    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}



//Recherche la liste de tous les départs en fonction d'un séjour:
function getAllDepartsBySejour(int $id)
{
    global $connection;

    $query = "
    SELECT 
        depart.*,
        DATE_ADD(depart.date_depart, INTERVAL sejour.nb_jour DAY ) AS date_arrive,
        sejour.id AS sejour,
        depart.nb_places - IFNULL(SUM(reservation.nb_places), 0) AS place_restantes
    FROM depart
    INNER JOIN sejour on depart.sejour_id = sejour.id
    LEFT JOIN reservation ON depart.id = reservation.depart_id
    WHERE depart.sejour_id = :id
    GROUP BY depart.id
    ";


    $stmt = $connection->prepare($query);
    $stmt ->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}