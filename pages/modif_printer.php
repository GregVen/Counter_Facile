<?php 

require_once "./bd/db_printers.php";

$_SESSION["id_printer"]=$id=$_GET["id"];


$resultat=getPrinter($id);
// $printer = $resultat->fetchArray();
// $nom=$printer['Nom'];
// $Adresse_IP=$printer['Adresse_IP'];
$nom=$resultat->Nom;
$Adresse_IP=$resultat->Adresse_IP;

?>
 
 <div class="element_autre">
   <div>
       <h2 class="titre2">Modification de l'imprimante " <?php echo $nom ?> "</h2>
   </div>
    <div class="table_autre">
        <form class="tableau_base2" action="./fonctions/modif_printer.php" method="post">

            <div class="modif">
                <label class="tab_1">Nom</label>
                <input class="tab_input" type="text" placeholder="Nom" name="nom" value="<?php if(empty($nom)){echo "";}else{echo $nom;} ?>" required>
            </div>   
            <div class="modif">
                <label class="tab_1">Adresse IP</label>
                <?php if (!empty($_SESSION["id_Role"]) == "1") {?>
                <input class="tab_input" type="text" type="text" minlength="7" maxlength="15" size="15" 
                    pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" 
                    placeholder="Adresse IP" name="Adresse_IP" value="<?php if(empty($Adresse_IP)){echo "";}else{echo $Adresse_IP;} ?>" >
                <?php } ?>
                <?php if (empty($_SESSION["id_Role"])) {?>
                    <input class="tab_input" type="hidden" name="Adresse_IP" value="<?php echo $Adresse_IP; ?>" >
                    <p class="para1"><?php echo $Adresse_IP; ?></p>
                <?php } ?>
            </div>
            <div class="bouton_modif">
                <button type="submit" class="tab_button" title="Valider">Modifier</button>
            </div>
        </form>
    </div>
</div> 