<?php
session_start();
require_once "../bd/db_printers.php";

 $id=$_GET["id"];
 
 try{

    deletePrinter($id); 
 
     header('location: ../index.php?page=machines');
     exit;
 
 } catch (PDOException $e){
     echo $e->getMessage();
     echo $e->getLine();
     exit();
 }
?>
