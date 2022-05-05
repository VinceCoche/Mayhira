<?php 
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mayhira;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) {
        die('Erreur: '.$e->getMessage());
    }

    $accueilAnim = $bdd->query('SELECT id, accueil_msg AS msg FROM accueilanim ORDER BY id');

    $accueilArray = array();
    
    foreach ($accueilAnim as $row) {
        $accueilArray[] = $row['msg'];
    }

    include("accueilsousscript.php"); 
?>

