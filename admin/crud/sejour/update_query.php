<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

$titre = $_POST['titre'];
$description = $_POST['description'];
$categorie_id = $_POST['categorie_id'];
$pays_id = isset($_POST['pays_id']) ? $_POST['pays_id'] : [];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $image);
} else {
    // Aucun fichier uploadé
    $image = $sejours["image"];
}

updateSejours($titre,$categorie_id, $pays_id, $difficulte_id, $description, $image, $publie, $nb_jour);

header('Location: index.php');
