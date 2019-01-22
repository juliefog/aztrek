<?php

//On vérifie que l'utilisateur a bien le droit d'être là.
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST['libelle'];


//Le but de la fonction est de récupérer le nom de la cat t de faire un insert into:

insertCategorie($libelle);

header('Location: index.php');
