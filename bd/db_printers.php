<?php

require_once "db_access.php";

function listPrinters(){
    $bdd = bdd();
    $sql = "SELECT * FROM machines";

    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete

    $result = $stmt->fetchAll(PDO::FETCH_OBJ); //objet
    return $result;

}


function newPrinter($nom, $adresse_ip){
    $bdd = bdd();

    $sql = "INSERT INTO machines(Nom, Adresse_IP) VALUES(?,?)";//requete

    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute([$nom, $adresse_ip]);//execution de la requete

    $idMachine=$bdd->lastInsertId();

    $sql = "INSERT INTO compteurs(idMachine) VALUES(?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([(int)$idMachine]);

    $stmt = $bdd->prepare($sql);
    
}  


function getPrinter($id){

        $bdd = bdd();
        $sql = "SELECT * FROM machines
        where idMachines = ?";
    
        $stmt = $bdd->prepare($sql);//preparation de la requete
        $stmt->execute([$id]);//execution de la requete
    
        $result = $stmt->fetch(PDO::FETCH_OBJ); //objet
        return $result;
}

function deletePrinter($id){
   
   $bdd = bdd();

   $sql = "DELETE from machines where idMachines = ?";//requete
   $stmt = $bdd->prepare($sql);//preparation de la requete
   $stmt->execute([$id]);//execution de la requete

   $sql = "DELETE from compteurs where idMachine = ?";//requete
   $stmt = $bdd->prepare($sql);//preparation de la requete
   $stmt->execute([$id]);//execution de la requete
    
}

function modifyPrinter($Nom, $Adresse_IP, $id){

    $bdd = bdd();
    $sql = "UPDATE machines
    SET Nom = ?, Adresse_IP = ?
    WHERE idMachines = ?";

    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute([$Nom, $Adresse_IP, $id]);//execution de la requete

}

function listSnmp(){

    $bdd = bdd();
    $sql = "SELECT * FROM snmp_oid";

    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete

    $result = $stmt->fetch(PDO::FETCH_OBJ); //objet
    return $result;
}

function IPMachine($idMachine){
    $bdd = bdd();
    $sql = "SELECT Adresse_IP FROM machines where idMachines = ?";
    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute([$idMachine]);//execution de la requete

    $result = $stmt->fetch(PDO::FETCH_OBJ); //objet
    return $result;
}

function upDateCompteurDebut($idMachine, $A4NB_Debut, $A4C_Debut, $A3NB_Debut, $A3C_Debut){
    $bdd = bdd();
    $sql = "UPDATE compteurs 
            SET A4NB_Debut = ?, A4C_Debut = ?, A3NB_Debut = ?, A3C_Debut = ?
            WHERE idMachine = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$A4NB_Debut, $A4C_Debut, $A3NB_Debut, $A3C_Debut, $idMachine]);

    $sql ="UPDATE machines
            SET Etat = 1
            WHERE idMachines = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$idMachine]);
}

function upDateCompteurFin($idMachine, $A4NB_Fin, $A4C_Fin, $A3NB_Fin, $A3C_Fin){
    $bdd = bdd();
    $sql = "UPDATE compteurs 
            SET A4NB_Fin = ?, A4C_Fin = ?, A3NB_Fin = ?, A3C_Fin = ?
            WHERE idMachine = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$A4NB_Fin, $A4C_Fin, $A3NB_Fin, $A3C_Fin, $idMachine]);

    $sql ="UPDATE machines
            SET Etat = 0
            WHERE idMachines = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$idMachine]);
}

function en_Ligne($en_Ligne, $idMachine){
    $bdd = bdd();
    $sql = "UPDATE machines
    SET en_Ligne = ?
    WHERE idMachines = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$en_Ligne, $idMachine]);
}