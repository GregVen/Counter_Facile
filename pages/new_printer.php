<?php 

require_once "./bd/db_printers.php";
?>

<div class="element_autre">
   <div>
       <h2 class="titre2">Nouvelle Imprimante</h2>
   </div>
   <div class="table_autre">
        <form class="tableau_base2" action="./fonctions/new_printer.php" method="post">

            <div class="modif">
                <label class="tab_1">Nom</label>
                <input class="tab_input" type="text" name="nom" placeholder="Nom" required>
            </div>   
            <div class="modif">
                <label class="tab_1">Adresse IP</label>
                <input class="tab_input" type="text" type="text" minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" placeholder="Adresse IP" name="Adresse_IP" required>
            </div>
            <div class="bouton_modif">
                <button type="submit" class="tab_button" title="Valider">Valider</button>
            </div>
        </form>
    </div>
    
</div>