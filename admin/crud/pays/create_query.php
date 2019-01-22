<?php

//On vérifie que l'utilisateur a bien le droit d'être là.
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom'];


//Le but de la fonction est de récupérer le nom de la cat t de faire un insert into:

insertCategorie($nom);

header('Location: index.php');
