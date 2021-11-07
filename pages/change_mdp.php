<?php 

require_once "./bd/db_login.php";

$login=$_SESSION["login"];


// $users=listUsers();

?>
 
 <div class="element_autre">
   <div>
       <h2 class="titre2">Modification du mot de passe de "<?php echo $login ?> "</h2>
   </div>
   <div class="table_autre">
        <form class="tableau_base2" action="./fonctions/new_pass.php" method="post">
            <?php if (!empty($_SESSION["motdepassechange"])){
                    if ($_SESSION["motdepassechange"]==2){ ?>
                        <p class="error_message"> Mauvais mot de passe </p>
                    <?php }
                    if ($_SESSION["motdepassechange"]==1) { ?>
                        <p class="error_message"> Le mot de passe a été changé </p>
                    <?php
                    }
                } 
            ?>
            <div class="modif">
                <label class="tab_1_0">Ancien mot de passe</label>
                <input class="tab_input" type="password" name="old_password" >
            </div>   
            <div class="modif">
                <label class="tab_1_0">Nouveau mot de passe</label>
                <input class="tab_input" type="password" name="new_password" >

            </div>
            <div class="bouton_modif">
                <button type="submit" class="tab_button" title="Valider">Modifier</button>
            </div>
        </form>
   </div>
</div> 