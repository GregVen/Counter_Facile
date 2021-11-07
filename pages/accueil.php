<?php 

require_once "./bd/db_count.php";

 try{
        
    $result = listPrintersAll();
    $tarifA4NB = costA4NB();
    $A4NB_cout=$tarifA4NB->cout;
    $tarifA3NB = costA3NB();
    $A3NB_cout=$tarifA3NB->cout;
    $tarifA4C = costA4C();
    $A4C_cout=$tarifA4C->cout;
    $tarifA3C = costA3C();
    $A3C_cout=$tarifA3C->cout;

} catch (PDOException $e){
    echo $e->getMessage();
    echo $e->getLine();
    exit();
}
?>

<h2 class="titre2">Accueil</h2>


<?php
// var_dump($result);

	foreach ($result as $value): 
            $A4NB_Debut=$value->A4NB_Debut;
            $A4C_Debut=$value->A4C_Debut;
            $A3NB_Debut=$value->A3NB_Debut;
            $A3C_Debut=$value->A3C_Debut;
            $A4NB_Fin=$value->A4NB_Fin;
            $A4C_Fin=$value->A4C_Fin;
            $A3NB_Fin=$value->A3NB_Fin;
            $A3C_Fin=$value->A3C_Fin;

            $totalA4NB=$A4NB_Fin - $A4NB_Debut;
            $totalA4C=$A4C_Fin - $A4C_Debut;
            $totalA3NB=$A3NB_Fin - $A3NB_Debut;
            $totalA3C=$A3C_Fin - $A3C_Debut;

            if ($value->Etat == 1) {
                require "en_cours.php";
            }

            if ($value->Etat == 0) {
                require "termine.php";
            }




    endforeach ?> 