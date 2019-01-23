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



//Utilisé dans l'admin pour afficher tous les séjours même ceux qui ne sont pas publiés:

function getAllSejours(int $limit = 999, $onlyPublished = true)
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
    ";

    if ($onlyPublished) {
        $query .= "WHERE sejour.publie = 1";
    }

    $query .= "
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



function insertSejour(string $titre, string $categorie_id, string $pays_id, string $difficulte_id, string $description, string $image, string $publie, string $nb_jour){

    global $connection;

    $query ="
    INSERT INTO sejour (titre, categorie_id, pays_id, difficulte_id, description, image, nb_jour, publie)
    VALUES (:titre, :categorie_id, :pays_id, :difficulte_id, :description, :image, :nb_jour, :publie)";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":nb_jour", $nb_jour);
    $stmt->bindParam(":publie", $publie);

    return $stmt->execute();
}




function updateSejours(string $titre, string $categorie_id, string $pays_id, string $difficulte_id, string $description, string $image, string $publie, string $nb_jour){

    global $connection;

    $query ="
    INSERT INTO sejour (titre, categorie_id, pays_id, difficulte_id, description, image, nb_jour, publie)
    VALUES (:titre, :categorie_id, :pays_id, :difficulte_id, :description, :image, :nb_jour, :publie)";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":nb_jour", $nb_jour);
    $stmt->bindParam(":publie", $publie);

    return $stmt->execute();
}

//
//function getSejour($id){
//    global $connection;
//
//    $query = "
//    SELECT
//    sejour.*
//    FROM sejour
//    GROUP BY sejour.id
//    ";
//
//    $stmt = $connection->prepare($query);
//    $stmt->bindParam(":id", $id);
//    $stmt->execute();
//
//    return $stmt->fetchAll();
//
//}