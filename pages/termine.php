
<div class="general_machine">
    <div class="titre_machine">

        <div class="img_copier">
            <img src="./img/copier.png" alt="copier">
        </div>

        <div class="intitule">
            <h2>MACHINE : "<?= $value->Nom;?>"</h2>
            <h3>Adresse IP : "<?= $value->Adresse_IP;?>"</h3>
            <h3>Etat : " Terminé <?php 
                                if ($value->en_Ligne == 0) { ?> - <span class='error_message'>Hors Ligne</span> "</h3> <?php
                                } ?>
        </div>

        <div class="total">
            <h3>Total</h3>
            <h3>Copies: <?php echo ($totalA4NB + $totalA4C) ;?> A4 + <?php echo ($totalA3NB + $totalA3C) ;?> A3</h3>
            <h2 class="montant">Montant: <?php echo ((($totalA4C * $A4C_cout) + ($totalA4NB * $A4NB_cout) + ($totalA3C * $A3C_cout) + ($totalA3NB * $A3NB_cout)) / 100);?> €</h2>
            
        </div>
        <div class="maintenance">
            <a href="index.php?page=modif_printer&id=<?= $value->idMachines;?>"><img src="./img/software-maintenance.png" alt="maintenance"></a>
        </div>
    </div>

    <div class="detail_machine">
        <div>
            <table class="tableau_compteurs">
                <tr class="ligne1">
                    <th class="tab_titre">NB petits formats</th>
                    <td class="tab_compteur"><?php echo $A4NB_Debut;?></th>
                    <td class="tab_compteur"><?php echo $A4NB_Fin; ?></th>
                    <td class="tab_compteur_tot"><?php echo $totalA4NB; ?></th>
                    <td class="tab_compteur_cout"><?php echo ($totalA4NB * $A4NB_cout)/100;?> €</th>
                </tr>
                <tr class="ligne2">
                    <th class="tab_titre">NB grands formats</th>
                    <td class="tab_compteur"><?php echo $A3NB_Debut;?></th>
                    <td class="tab_compteur"><?php echo $A3NB_Fin; ?></th>
                    <td class="tab_compteur_tot"><?php echo $totalA3NB; ?></th>
                    <td class="tab_compteur_cout"><?php echo ($totalA3NB * $A3NB_cout)/100;?> €</th>
                </tr>
                <tr class="ligne1">
                    <th class="tab_titre">Couleurs petits formats</th>
                    <td class="tab_compteur"><?php echo $A4C_Debut;?></th>
                    <td class="tab_compteur"><?php echo $A4C_Fin; ?></th>
                    <td class="tab_compteur_tot"><?php echo $totalA4C; ?></th>
                    <td class="tab_compteur_cout"><?php echo (($totalA4C * $A4C_cout)/100);?> €</th>
                </tr>
                <tr class="ligne2">
                    <th class="tab_titre">Couleurs grands formats</th>
                    <td class="tab_compteur"><?php echo $A3C_Debut;?></th>
                    <td class="tab_compteur"><?php echo $A3C_Fin; ?></th>
                    <td class="tab_compteur_tot"><?php echo $totalA3C; ?></th>
                    <td class="tab_compteur_cout"><?php echo (($totalA3C * $A3C_cout)/100);?> €</th>
                </tr>    
            </table>

        </div>
        <div class="bouton">
            <a href="<?php echo "./fonctions/recup_compteurs.php?id=".$value->idMachines."&etat=1" ?>"><p>Debut</p></a>
            <p class="disable_bouton">Fin</p>
        </div>

    </div>

</div>