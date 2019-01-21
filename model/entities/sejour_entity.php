<!--Pour afficher les séjours dans un pays:-->

<?php
function getOneSejour(int $id) : array{
    global $connection;

    $query ="
    SELECT 
      sejour.titre,
      sejour.image,
      sejour.description,
      categorie.libelle AS categorie,
      difficulte.libelle AS difficulte,
      jour.id AS jour
      
    FROM sejour
    INNER JOIN categorie ON sejour.categorie_id = categorie.id
    INNER JOIN difficulte  on sejour.difficulte_id = difficulte.id
    LEFT JOIN jour on sejour.id = jour.sejour_id
    WHERE sejour.publie = 1
    AND sejour.id = :id
    GROUP BY sejour_id

    ";

    $stmt=$connection->prepare($query);
    $stmt->execute();

    return $stmt->fetch();
}





function getAllSejours(int $limit =999)
{
    global $connection;

    $query = "
    SELECT 
    sejour.*,
      categorie.libelle AS categorie,
      pays.nom AS pays,
      difficulte.libelle AS difficulte
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


//Pour afficher tous les séjours dans une page pays:

function getAllSejoursByPays(string $pays)
{
    global $connection;

    $query = "
    SELECT 
    sejour.*,
      categorie.libelle AS categorie,
      pays.nom AS pays,
      difficulte.libelle AS difficulte
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


//
//
//function insertRecette(string $titre, int $categorie_id, string $image, string $description, string $description_courte, int $couverts, string $temps_prepa, string $temps_cuisson, int $publie, int $utilisateur_id) {
//    global $connection;
//
//    $query = "
//    INSERT INTO recette (titre, image, description, description_courte, couverts, temps_prepa, temps_cuisson, publie, date_creation, utilisateur_id, categorie_id)
//    VALUES (:titre, :image, :description, :description_courte, :couverts, :temps_prepa, :temps_cuisson, :publie, NOW(), :utilisateur_id, :categorie_id)
//    ";
//
//    $stmt = $connection->prepare($query);
//    $stmt->bindParam(":titre", $titre);
//    $stmt->bindParam(":image", $image);
//    $stmt->bindParam(":description", $description);
//    $stmt->bindParam(":description_courte", $description_courte);
//    $stmt->bindParam(":couverts", $couverts);
//    $stmt->bindParam(":temps_prepa", $temps_prepa);
//    $stmt->bindParam(":temps_cuisson", $temps_cuisson);
//    $stmt->bindParam(":publie", $publie);
//    $stmt->bindParam(":categorie_id", $categorie_id);
//    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
//    $stmt->execute();
//}
