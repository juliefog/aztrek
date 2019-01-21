<?php
require_once __DIR__ . "/../config/parameters.php";


try {
    $connection = new PDO("mysql:host=" . DB_HOST .";dbname=". DB_NAME, DB_USER, DB_PASS, [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données";
    die;
}


// Chargement des fonctions dans le dossier "entities"
$files = glob(__DIR__ . "/entities/*.php");
foreach ($files as $filepath) {
    require_once $filepath;
}



//FONCTION GENERIQUE: quand on n'a pas de jointure à faire. Et qu'une table est liée directement à une autre (dans le diagramme).C'est une fonction qui permet de récupérer les données dans la BDD,
//soit toutes les données de la table avc AllEntities soit juste une ligne avec One Entity. On les combine ensuite avec les fonctions particulières.


//1
//Récupère l'ensemble des catégories pour la barre de recherche : (on fait une fonction générale) ON pourra l'utiliser pour toutes les tables simples:
function getAllEntities(string $table): array{
    global $connection;

    $query = "
    SELECT *
    FROM $table";

//    On prépare la requête et on l'exécute:'
    $stmt=$connection->prepare($query);
    $stmt->execute();

//    C'est fetchall car on prend toutes les tables:
    return $stmt->fetchAll();
}



//2
////Prend en compte le nom de la table puis renvoie l'id.'
function getOneEntity(string $table, int $id) : array{
    global $connection;

    $query = "
    SELECT *
    FROM $table
    WHERE id =:id";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}



//3
function deleteEntity(string $table, int $id){
    global $connection;

    $query = "
    DELETE FROM $table
    WHERE id = :id";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":id", $id);

//    Si suppression bien fait la fonction n'envoie rien. 'Si y a une erreur tu catch l'erreur: Essaye de faire ça mais
// si y a une erreur de plante pas et attrape l'erreur pour qu'on s'en occupe.
    try {
    $stmt->execute();

} catch (PDOException $exception){
        return $exception;
    }
    return null;

}








