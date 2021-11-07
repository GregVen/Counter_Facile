<?php


session_start();

require_once "../bd/db_login.php";

$login=htmlspecialchars($_POST["login"]);
$motdepasseEntre=$_POST["motdepasse"];


$requete=loginUser($login);

if ($requete){
    if (password_verify($motdepasseEntre, $requete->password)){
    $_SESSION["userID"]=$requete->userID;
    $_SESSION["login"]=$login;
    $_SESSION["id_Role"]=$requete->id_Role;
    header("location: ../index.php");

    } else {
    $_SESSION["error"]=1;
    $_SESSION["message"]='Le mot de passe est incorrect.';
    header("location: ../index.php?page=admin/connexion");

    }
} else {
    $_SESSION["error"]=1;
    $_SESSION["message"]='L\'utilisateur n\'existe pas';
    header("location: ../index.php?page=admin/connexion");

}