<?php
    //Procédural
    try { // accès à la bdd
            $bdd = new PDO('mysql:host=localhost;dbname=mayhira;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch(Exception $e) {
            die('Erreur: '.$e->getMessage()); 
    }
?>