<?php require_once __DIR__ . '/../../functions.php'; ?>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">

<!--                renvoie true si l'url contient admin-->
                <a class="nav-link <?php echo isActive("/admin/", true) ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>">
                    <i class="fa fa-home"></i>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/recettes/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/sejour/">
                    <i class="fa fa-cutlery"></i>
                    Sejour
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/categorie/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/pays/">
                    <i class="fa fa-gamepad"></i>
                    Pays
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-tags"></i>
                    Catégories
                </a>
            </li>
        </ul>
    </div>
</nav>