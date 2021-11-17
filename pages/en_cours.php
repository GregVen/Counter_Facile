<?php 
$texte="en cours";

?>

<!-- <h2>Accueil</h2> -->

<div class="general_machine">
    <div class="titre_machine">

        <div class="img_copier">
            <img src="./img/copier.png" alt="copier">
        </div>

        <div class="intitule">
            <h2>MACHINE : "<?= $value->Nom;?>"</h2>
            <h3>Adresse IP : "<?= $value->Adresse_IP;?>"</h3>
            <h3>Etat : " <span class="en_cours"><?php echo $texte;?></span>
                            <?php
                                if ($value->en_Ligne == 0) { ?>
                                 - <span class='error_message'>Hors Ligne</span> "</h3>
                                 <?php
                                } ?>
        </div>

        <div class="total">
            <h3>Total</h3>
            <h3 class="en_cours">Copies: <?php echo $texte; ?></h3>
            <h2 class="montant">Montant: </h2>
            
        </div>
        <div class="maintenance">
            <a href="#"><img src="./img/software-maintenance.png" alt="maintenance"></a>
        </div>
    </div>

    <div class="detail_machine">
        <div>
            <table class="tableau_compteurs">
                <tr class="ligne1">
                    <th class="tab_titre">NB petits formats</th>
                    <td class="tab_compteur"><?php echo $A4NB_Debut;?></th>
                    <td class="tab_compteur en_cours"><?php echo $texte; ?></th>
                    <td class="tab_compteur_tot en_cours"><?php echo $texte; ?></th>
                    <td class="tab_compteur_cout en_cours"><?php echo $texte; ?></th>
                </tr>
                <tr class="ligne2">
                    <th class="tab_titre">NB grands formats</th>
                    <td class="tab_compteur"><?php echo $A3NB_Debut;?></th>
                    <td class="tab_compteur en_cours"><?php echo $texte; ?></th>
                    <td class="tab_compteur_tot en_cours"><?php echo $texte; ?></th>
                    <td class="tab_compteur_cout en_cours"><?php echo $texte; ?></th>
                </tr>
                <tr class="ligne1">
                    <th class="tab_titre">Couleurs petits formats</th>
                    <td class="tab_compteur"><?php echo $A4C_Debut;?></th>
                    <td class="tab_compteur en_cours"><?php echo $texte; ?></th>
                    <td class="tab_compteur_tot en_cours"><?php echo $texte; ?></th>
                    <td class="tab_compteur_cout en_cours"><?php echo $texte; ?></th>
                </tr>
                <tr class="ligne2">
                    <th class="tab_titre">Couleurs grands formats</th>
                    <td class="tab_compteur"><?php echo $A3C_Debut;?></th>
                    <td class="tab_compteur en_cours"><?php echo $texte; ?></th>
                    <td class="tab_compteur_tot en_cours"><?php echo $texte; ?></th>
                    <td class="tab_compteur_cout en_cours"><?php echo $texte; ?></th>
                </tr>    
            </table>

        </div>
        <div class="bouton">
            <p class="disable_bouton">Debut</p>
            <a href="<?php echo "./fonctions/recup_compteurs.php?id=".$value->idMachines."&etat=0" ?>"><p>Fin</p></a>
        </div>

    </div>

</div>