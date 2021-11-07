<?php 

require_once "./bd/db_printers.php";

 try{
        
    $result = listPrinters();

} catch (PDOException $e){
    echo $e->getMessage();
    echo $e->getLine();
    exit();
}

?>


<div class="element_autre">
    <div class="titre_autre">
        <h2 class="titre2">Liste des imprimantes</h2>
    </div>

    <div class="table_autre">
        <table class="tableau_base">
            <tr class="tab_tr">
                <th class="tab_1">Nom</th>
                <th class="tab_1">Adresse IP</th>
                <th></th>

            </tr>

            <?php foreach ($result as $value):?>
                <tr class="tab_tr">         
                    <td class="tab_4B"> <?php echo $value->Nom;?></td>
                    <td class="tab_4"><?php echo $value->Adresse_IP;?></td>
                    <td ><a  class="modif_printer" href="<?php echo "index.php?page=modif_printer&id=".$value->idMachines ?>" title="Editer"> Modifier </a></td>
                    <?php if (!empty($_SESSION["id_Role"]) == 1) {?><td><a class="del_printer" href="<?php echo "../fonctions/del_printer.php?id=".$value->idMachines ?>" title="Supprimer"> Supprimer</a></td><?php } ?>
                    
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <?php if (!empty($_SESSION["id_Role"]) == "1") {?><a class="add_printer" href="index.php?page=new_printer">Nouvelle imprimante</a><?php } ?>
</div>


