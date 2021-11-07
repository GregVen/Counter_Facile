<?php

require_once "db_access.php";

function listTarifs(){

    $bdd = bdd();
    $sql = "SELECT * FROM tarifs";

    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete

    $result = $stmt->fetchAll(PDO::FETCH_OBJ); //objet
    return $result;
}


 function modifTarif($cout,$idTarif){

    $bdd = bdd();
    $sql = "UPDATE tarifs
    SET cout = ? where idTarif = ?";//requete

    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute([$cout, $idTarif]);//execution de la requete 

 }; 
