<!--Afficher la page séjour en liant les tables séjour, catégorie, difficulté et départ. On affiche séjour quand il est publié -->
<?php
//On recherche un séjour par id qu'on affiche dans un tableau:
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



//On recherche tous les séjours s'ils sont publiés.
// Utilisé dans l'admin pour afficher tous les séjours même ceux qui ne sont pas publiés:

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




//On recherche toutes les étapes d'un séjour grâce au paramètre jou:

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



//On recherche tous les séjours par pays:

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


//On insert un séjour avec les paramètres qui suivent.
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



//On met à jour un séjour sur les paramètres qui suivent:
function updateSejours(int $id, string $titre, int $categorie_id, int $pays_id, int $difficulte_id, string $image, string $description, int $publie, int $nb_jour){

    global $connection;

    $query ="
    UPDATE sejour SET titre = :titre, categorie_id = :categorie_id, pays_id = :pays_id, difficulte_id = :difficulte_id, image = :image, description = :description, publie=:publie, nb_jour=:nb_jour
     WHERE id = :id";


    $stmt=$connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":nb_jour", $nb_jour);
    $stmt->bindParam(":publie", $publie);

    return $stmt->execute();





//
//function getSejour($id){
   // global $connection;

   // $query = "
   // SELECT
   // sejour.*
   // FROM sejour
  //  GROUP BY sejour.id
 //   ";

  //  $stmt = $connection->prepare($query);
   // $stmt->bindParam(":id", $id);
  //  $stmt->execute();

   // return $stmt->fetch();
}