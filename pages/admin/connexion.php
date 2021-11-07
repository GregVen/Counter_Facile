

<div class="element_autre">
   <div>
       <h2 class="titre2">Connexion admin</h2>
   </div>
    <?php 
    if (!empty($_SESSION["error"])){
        if ($_SESSION["error"] == 1) {
            echo '<p class="error_message">'.$_SESSION["message"].'</p>';
        }
    }

    ?>
    <div class="table_autre">
        <form class="tableau_base2" action="../fonctions/connexion.php" method="post">

            <div class="modif">
                <label class="tab_1">login</label>
                <input class="tab_input" type="text" name="login" placeholder="Login" required>
            </div>   
            <div class="modif">
                <label class="tab_1">Mot de passe</label>
                <input class="tab_input" type="password" placeholder="Password" name="motdepasse" required>
            </div>
            <div class="bouton_modif">
                <button type="submit" class="tab_button"  title="Valider">Valider</button>
            </div>
        </form>
    </div>
</div>
