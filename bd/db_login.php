<?php

require_once "db_access.php";

function loginUser($pseudo){
    $bdd = bdd();
    $sql = "SELECt * FROM users where login = ?";
    $stmt = $bdd->prepare($sql);
    $stmt -> execute(array($pseudo));
    $resultat = $stmt ->fetch(PDO::FETCH_OBJ);
    return $resultat;
    
    }

function loginUserID($userID){
    $bdd = bdd();
    $sql = "SELECt * FROM users where userID = ?";
    $stmt = $bdd->prepare($sql);
    $stmt -> execute(array($userID));
    $resultat = $stmt ->fetch(PDO::FETCH_OBJ);
    return $resultat;
    
    }

function listUsers(){
    $bdd = bdd();
    $sql = "SELECT * FROM users";
    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute();//execution de la requete
    $result = $stmt->fetchAll(PDO::FETCH_OBJ); //objet
    return $result;

}

function modifyPass($password, $userID){

    $bdd = bdd();
    $sql = "UPDATE users
    SET users.password = ?
    WHERE userID = ?";

    $stmt = $bdd->prepare($sql);//preparation de la requete
    $stmt->execute([$password, $userID]);//execution de la requete

}