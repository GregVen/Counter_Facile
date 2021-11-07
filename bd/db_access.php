<?php 

function bdd(){   
    //$bdd = new PDO('sqlite:counter');//connexion db
    //$bdd = new PDO("mysql:host=localhost;dbname=count", "root","");//connexion db
	try{
        $bdd = new PDO("mysql:host=localhost;dbname=count", "root","");
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
    
    } catch(Exception $e) {
        echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
        die();
    }
    return $bdd;
} 

?>