<?php
session_start();
$idMachine=$_GET["id"];
$etat=$_GET["etat"];

require_once "../bd/db_printers.php";

try{
        
    $result_snmp = listSnmp();
    $ip = IPMachine($idMachine) -> Adresse_IP;
    $OID_T_C=$result_snmp->OID_Total_C;
    $OID_T_NB=$result_snmp->OID_Total_NB;
    $OID_A3C=$result_snmp->OID_Total_A3C;
    $OID_A3NB=$result_snmp->OID_Total_A3NB;

    
    if (!empty(snmp2_get("$ip", "private", "$OID_T_NB","100","2"))){
        $TotalNB = explode(': ', snmp2_get("$ip", "private", "$OID_T_NB","100","2"))[1];//on recupere total NB
        $TotalC = explode(': ', snmp2_get("$ip", "private", "$OID_T_C","100","2"))[1];//on recupere total Couleur
        $TotalA3NB = explode(': ', snmp2_get("$ip", "private", "$OID_A3NB","100","2"))[1];//on recupere A3 NB
        $TotalA3C = explode(': ', snmp2_get("$ip", "private", "$OID_A3C","100","2"))[1];//on recupere A3 Couleur

        //on calcul le nombre de A4 Couleur
        $TotalA4C = $TotalC - $TotalA3C;

        //on calcul le nombre de A4 NB
        $TotalA4NB = $TotalNB - $TotalA3NB;

        if ($etat == 1){
            upDateCompteurDebut($idMachine, $TotalA4NB, $TotalA4C, $TotalA3NB, $TotalA3C);
        }
        if ($etat == 0){
            upDateCompteurFin($idMachine, $TotalA4NB, $TotalA4C, $TotalA3NB, $TotalA3C);
        }
        en_Ligne(1, $idMachine);
  
    }

    if (empty(snmp2_get("$ip", "private", "$OID_T_NB","100","2"))){
        en_Ligne(0, $idMachine);
    }
    
   
    header('location: ../index.php?page=accueil');

    exit;

} catch (PDOException $e){
    echo $e->getMessage();
    echo $e->getLine();
    exit();
}


?>





