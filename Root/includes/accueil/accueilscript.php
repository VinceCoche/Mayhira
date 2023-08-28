<!-- Script d'animation du texte utilisé sur accueil.php -->
<?php 

    include("includes/BDD/bdd_access.php"); 

    $accueilAnim = $bdd->query('SELECT id, accueil_msg AS msg FROM accueilanim ORDER BY id'); // recueil des entrées

    $accueilArray = array(); // Créer un array pour stocker les entrées de la BDD
    
    foreach ($accueilAnim as $row) {   // Stocke chaque entrée de la bdd dans un rang d'array chacune
        $accueilArray[] = $row['msg'];
    }

    include("accueilsousscript.php"); // Partie du script qui anime les entrées chacunes à leur tour 
?>