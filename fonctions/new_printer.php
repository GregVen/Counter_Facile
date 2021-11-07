<?php 
session_start();
require_once "../bd/db_printers.php";

 $nom=$_POST["nom"];
 $adresse_IP=$_POST["Adresse_IP"];
 
 try{
    
    newPrinter($nom, $adresse_IP); 
 
     header('location: ../index.php?page=machines');
     exit;
 
 } catch (PDOException $e){
     echo $e->getMessage();
     echo $e->getLine();
     exit();
 }
?>

