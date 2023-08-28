<?php

    class goldenBook {

        function __construct() {
            $donnees = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
            $this->bdd=$donnees;
            // Vérifier La connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL/echec de la connection à MySQL: " . mysqli_connect_error();
            }
        }

        public function insert($nom,$comment) {
            $ret=mysqli_query($this->bdd,"INSERT INTO goldenbook(nom, comment, horodatage) VALUES('$nom', '$comment', NOW())");
            return $ret;
        }

    }

    $insertGolden=new goldenBook();

    if(isset($_POST['submit'])) {
        $nom=$_POST['nom'];
        $comment=$_POST['comment'];
        $ins=$insertGolden->insert($nom,$comment);
        if($ins) {        
            ?>
                <script> window.location.replace("accueil.php"); </script>
            <?php
        } else {
            echo "<script>alert('Echec !');</script>";
        }
    }

?>
