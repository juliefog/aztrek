<?php
//Elle fait un print_r et un pre.
function debug($var, bool $die = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

/**
 * Affiche le contenu du fichier header.php
 * @param string $title Titre de la page
 * @param string $description MetaDescription de la page
 */


//On appelle les fichiers header, menu et footer.
function getHeader(string $title, string $description, array $stylesheets = []) {
    require_once 'layout/header.php';
}

function getMenu() {
    require_once 'layout/navigation.php';
}

function getFooter() {
    require_once 'layout/footer.php';
}

function getInstagram(){
    require_once 'layout/instagram.php';
}


//endwith ne sert à rien: vérifie si la chaine de caractère se ermine par une chaine de caratères.
//isactive st ce que lURL en court se termine par une chaine de caractère. Utilisé dans le fichier menu_left.
function isActive(string $url, bool $endWith = false): bool {
    if (
        (!$endWith && strpos($_SERVER['REQUEST_URI'], $url))
        || ($endWith && endsWith($_SERVER['REQUEST_URI'], $url))
    ) {
        return true;
    }
    return false;
}

function endsWith(string $str, string $search): bool {
    $length = strlen($search);
    return substr($str, -$length) === $search;
}