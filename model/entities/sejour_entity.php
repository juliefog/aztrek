<!--Afficher la page séjour-->
<?php
function getOneSejour(int $id) : array{
    global $connection;

    $query ="
    SELECT 
      sejour.titre,
      sejour.image,
      sejour.description,
      sejour.nb_jour,
      categorie.libelle AS categorie,
      difficulte.niveau AS difficulte,
    MIN(depart.prix) AS prix
    FROM sejour
    INNER JOIN depart on sejour.id = depart.sejour_id
    INNER JOIN categorie ON sejour.categorie_id = categorie.id
    INNER JOIN difficulte  ON sejour.difficulte_id = difficulte.id
    WHERE sejour.publie = 1
    AND sejour.id = :id
GROUP BY sejour.id
    ";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

//Utilisé dans l'admin :

function getAllSejours(int $limit =999)
{
    global $connection;

    $query = "
    SELECT 
    sejour.*,
      categorie.libelle AS categorie,
      pays.nom AS pays,
      difficulte.niveau AS difficulte
    FROM sejour
    INNER JOIN categorie ON sejour.categorie_id = categorie.id
    INNER JOIN pays ON sejour.pays_id = pays.id
    INNER JOIN difficulte  on sejour.difficulte_id = difficulte.id
    WHERE sejour.publie = 1
    GROUP BY sejour.id
    LIMIT $limit 
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}


//Afficher les étapes sejours:

function getAllEtapesBySejour(string $jour)
{
    global $connection;

    $query = "
    SELECT 
    jour. *,
    sejour.id AS sejour
    FROM jour
    INNER JOIN sejour on jour.sejour_id = sejour.id
    WHERE jour.sejour_id = :jour
    GROUP BY jour.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":jour", $jour);
    $stmt->execute();

    return $stmt->fetchAll();
}




//Afficher les départs d'un séjour:
function getAllDepartsBySejour(string $depart)
{
    global $connection;

    $query = "
    SELECT 
    depart.*,
    DATE_ADD(depart.date_depart, INTERVAL sejour.nb_jour DAY ) AS date_arrive,
    sejour.id AS sejour
    FROM depart
    INNER JOIN sejour on depart.sejour_id = sejour.id
    WHERE depart.sejour_id = :depart
    GROUP BY depart.id
    ";


    $stmt = $connection->prepare($query);
    $stmt ->bindParam(":depart", $depart);
    $stmt->execute();

    return $stmt->fetchAll();
}



//Pour afficher tous les séjours dans une page pays:

function getAllSejoursByPays(string $pays)
{
    global $connection;

    $query = "
    SELECT 
    sejour.*,
      categorie.libelle AS categorie,
      pays.nom AS pays,
      difficulte.niveau AS difficulte
    FROM sejour
    INNER JOIN categorie ON sejour.categorie_id = categorie.id
    INNER JOIN pays ON sejour.pays_id = pays.id
    INNER JOIN difficulte  on sejour.difficulte_id = difficulte.id
    WHERE sejour.publie = 1
    AND sejour.pays_id = :pays
    GROUP BY sejour.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":pays", $pays);
    $stmt->execute();

    return $stmt->fetchAll();
}


