<?php

require_once "./bd/db_tarifs.php";

try{
        
    $result = listTarifs();

} catch (PDOException $e){
    echo $e->getMessage();
    echo $e->getLine();
    exit();
}

?>


<div class="element_autre"> 
    <div class="titre_autre">
        <h2 class="titre2">Liste des tarifs (en cents d'€)</h2>
    </div>

    <div class="table_autre">
        <table class="tableau_base">
            <tr class="tab_tr">
                <th></th>
                <th class="tab_1">Coût actuel par page</th>
                <th class="tab_2b">Coût modifié par page</th>

            </tr>
            <?php 
            // foreach ($result as $value): 
                foreach ($result as $value):      
                    ?>
                    
                <tr class="tab_tr">         
                    <th class="tab_titre_bis"> <?php echo $value->format;?></td>
                    <td class="tab_4"><?php echo $value->cout;?></td>
                    <td class="tab_2">
                        <form action="<?php echo "./fonctions/modif_tarif.php?id=".$value->idTarif ?>" method="post">
                            <div class="tab_3">
                                <input  class="tab_input" type="number" min="0" max="500" step="1" value="<?php echo $value->cout ?>" name="tarif" required>
                                <button class="tab_button" type="submit" title="Valider">Modifier</button>
                            </div>
                        </form>
                    </td>
                    
                </tr>
                
                
                
            <?php 
            endforeach 
            ?>
        </table>
    </div>
</div>