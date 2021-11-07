<h1>Count as Simple</h1>

<?php if (!empty($_SESSION["id_Role"]) == 1) { ?>
    <div class="footer_connexion">
        <a href="./fonctions/deconnexion.php">se déconnecter</a>
    </div>
    <?php } else { ?>
        <div class="footer_connexion">
            <a href="index.php?page=admin/connexion">se connecter</a>
        </div>
    <?php } ?>