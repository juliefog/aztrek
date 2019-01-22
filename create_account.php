<?php
require_once 'model/database.php';
require_once 'functions.php';


getMenu();
getHeader("créer un compte", "Formulaire de création de compte");

?>

<form action="create_account_query.php" method="post">

    <p>
        <label>Nom</label>
        <input type="text" name="nom" placeholder="Nom" required>
    </p>

    <p>
        <label>Prénom</label>
        <input type="text" name="prenom" placeholder="Prénom" required>
    </p>

    <p>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required>
    </p>

    <p>
        <label>Mot de passe</label>
        <input type="password" name="mdp" required>
    </p>
  <input class="btn" type="submit" value="Créer mon compte">

</form>



<?php getFooter() ?>
