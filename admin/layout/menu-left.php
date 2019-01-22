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
                <a class="nav-link <?php echo isActive("/crud/sejour/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/sejour/">
                    <i class="fa fa-plane"></i>
                    Sejour
                    </a>
             </li>

            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/jour/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/jour/">
                    <i class="fa fa-tags"></i>
                    Etapes des séjours
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/depart/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/depart/">
                    <i class="fa fa-clock-o"></i>
                    Départs des séjours
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/pays/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/pays/">
                    <i class="fa fa-globe"></i>
                    Pays
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/categorie/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/categorie/">
                    <i class="fa fa-tags"></i>
                    Catégories
                </a>
            </li>
        </ul>
    </div>
</nav>