<?php

    //relation à la BDD
    define('DB_SERVER','localhost'); 
    define('DB_USER','root');
    define('DB_PASS' ,'');
    define('DB_NAME','mayhira');

    class goldMsg { // Commentaire à récupérer de la BDD av horodatage et nom de l'OP
        function __construct() { // connection à la BDD
            $donnees = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); // recupère les informations pour accéder à la BDD
            $this->bdd=$donnees; // Vérifier La connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL/echec de la connection à MySQL: " . mysqli_connect_error(); // Message en cas d'erreur de connexion à MySQL
            }
        }

        public function fetchdata() { 
            $result=mysqli_query($this->bdd,"SELECT nom, comment, DATE_FORMAT(horodatage, '%d/%m %H:%i') AS heure FROM goldenbook ORDER BY id DESC LIMIT 3"); // Récupère le commentaire, le nom de l'OP 
            return $result;                                                                                                                                   //et l'heure et la date du commentaire 
        }                                                                                                                                                     //et garde uniquement les 3 derniers
    }


    $fetchGolden=new goldMsg();

    $sql=$fetchGolden->fetchdata();

    while($row=mysqli_fetch_array($sql)) {
        ?>
            <p>
                Posté par : <?php echo htmlspecialchars($row['nom']); ?> le
                <?php 
                    echo " ";
                    echo ($row['heure']); // rend l'horodatage précis auquels l'entrée à été faite (créé automatiquement lors de la création de l'entrée)
                    echo " ";
                ?>
                <br>
                <?php echo htmlspecialchars($row['comment']); ?> <!-- rend le commentaire stocké dans la colonne "comment" dans la table goldenbook -->
                <br>
                <br>
            </p>
        <?php
    } 


    // Insertion dans la BDD

    include("goldenbookinsert.php"); // Partie du script qui anime les entrées chacunes à leur tour 

?>