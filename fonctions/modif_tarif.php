<?php
session_start();
$tarif=$_POST["tarif"];
$idTarif=$_GET["id"];


require_once "../bd/db_tarifs.php";

try{

    // require "./verification_modif_role.php";

    modifTarif($tarif,$idTarif); 

    header('location: ../index.php?page=tarifs');
    exit;

} catch (PDOException $e){
    echo $e->getMessage();
    echo $e->getLine();
    exit();
}