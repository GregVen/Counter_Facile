<?php

require_once "db_access.php";

function listPrintersAll(){
    $bdd = bdd();
    $sql = "SELECT * FROM machines
    left join compteurs
    on machines.idMachines = compteurs.idMachine";

    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete

    $result = $stmt->fetchAll(PDO::FETCH_OBJ); //objet
    return $result;

}
function costA4NB(){
    $bdd = bdd();
    $sql = "select * from tarifs where idTarif = 1";
    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete

    $result = $stmt->fetch(PDO::FETCH_OBJ); //objet
    return $result;
}
function costA4C(){
    $bdd = bdd();
    $sql = "select * from tarifs where idTarif = 2";
    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete

    $result = $stmt->fetch(PDO::FETCH_OBJ); //objet
    return $result;
}
function costA3NB(){
    $bdd = bdd();
    $sql = "select * from tarifs where idTarif = 3";
    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete

    $result = $stmt->fetch(PDO::FETCH_OBJ); //objet
    return $result;
}
function costA3C(){
    $bdd = bdd();
    $sql = "select * from tarifs where idTarif = 4";
    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete

    $result = $stmt->fetch(PDO::FETCH_OBJ); //objet
    return $result;
}


