<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneEntity('sejour', $id);

$titre = $_POST['titre'];
$categorie_id = $_POST['categorie_id'];
$pays_id = $_POST['pays_id'];
$difficulte_id = $_POST['difficulte_id'];
$description = $_POST['description'];
$publie = ($_POST['publie'] == "on") ? 1 : 0;
$nb_jour = $_POST['nb_jour'];


// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}

updateSejours($id, $titre, $categorie_id, $pays_id, $difficulte_id, $filename, $description, $publie, $nb_jour);

header('Location: index.php');
