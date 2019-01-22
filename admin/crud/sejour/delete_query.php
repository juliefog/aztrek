<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneEntity("sejour", $id);

$sejour = deleteEntity("sejour", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

unlink("../sejour.php/" . $sejour["id"]);

header('Location: index.php');
