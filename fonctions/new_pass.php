<?php

session_start();

require_once "../bd/db_login.php";


$old_password=$_POST["old_password"];
$new_password=$_POST["new_password"];

$login=$_SESSION["login"];
$userID=$_SESSION["userID"];

$requete=loginUserID($userID);



if(password_verify($old_password, $requete->password)){
    $motdepasse=password_hash($new_password, PASSWORD_DEFAULT);
    modifyPass($motdepasse, $userID);
    $_SESSION["motdepassechange"]=1;
    header("location: ../index.php?page=change_mdp");
    exit();

} else { 
    $_SESSION["motdepassechange"]=2;
    header("location: ../index.php?page=change_mdp");
    exit();
    }

// $requete=loginUser($login);

// if ($requete){
//     if (password_verify($motdepasseEntre, $requete->password)){
//     $_SESSION["userID"]=$requete->userID;
//     $_SESSION["login"]=$login;
//     $_SESSION["id_Role"]=$requete->id_Role;
//     header("location: ../index.php");

//     } else {
//     $_SESSION["error"]=1;
//     $_SESSION["message"]='Le mot de passe est incorrect.';
//     header("location: ../index.php?page=admin/connexion");

//     }
// } else {
//     $_SESSION["error"]=1;
//     $_SESSION["message"]='L\'utilisateur n\'existe pas';
//     header("location: ../index.php?page=admin/connexion");

// }