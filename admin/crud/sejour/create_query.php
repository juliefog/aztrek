<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$categorie_id = $_POST['categorie_id'];
$pays_id = $_POST['pays_id'];
$description = $_POST['description'];
$nb_jour = $_POST['nb_jour'];
$difficulte_id = $_POST['difficulte_id'];


$publie = ($_POST['publie'] == "on") ? 1 : 0;


// Upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $image);

insertSejour($titre,$categorie_id, $pays_id, $difficulte_id, $description, $image, $publie, $nb_jour);

header('Location: index.php');