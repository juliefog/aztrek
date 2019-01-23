<?php

//On vérifie que l'utilisateur a bien le droit d'être là.
require_once '../../security.php';
require_once '../../../model/database.php';

$num_jour= $_POST['num_jour'];
$sous_titre = $_POST['sous_titre'];
$description = $_POST['description'];
$sejour_id = $_POST['sejour_id'];



$publie = ($_POST['publie'] == "on") ? 1 : 0;


// Upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $image);

$image_second = $_FILES["image_second"]["name"];
$tmp = $_FILES["image_second"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $image);



//Le but de la fonction est de récupérer les infos de la table jour et de les insérer.

insertJour ($num_jour, $sous_titre, $description, $image, $image_second,$sejour_id);

header('Location: index.php');
