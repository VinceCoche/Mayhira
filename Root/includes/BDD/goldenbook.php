<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mayhira;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $goldenbook = $bdd->query('SELECT nom, comment, DATE_FORMAT(horodatage, "%d/%m/%Y %H:%i:%s") AS heure FROM goldenbook ORDER BY id DESC LIMIT 3');

    while ($donnees = $goldenbook->fetch()) {
        ?>
         <p>
            Posté par : <?php echo htmlspecialchars($donnees['nom']); ?> le 
            <?php 
                echo " ";
                echo ($donnees['heure']); 
                echo " ";
            ?>
            <br>
            <?php echo htmlspecialchars($donnees['comment']); ?>
            <br>
            <br>
        </p>
        <?php
    }

    $goldenbook->closeCursor();

    if (empty($_POST['nom']) OR empty($_POST['comment'])) {
        // header('Location: accueil.php');
        echo('veuillez remplirs les 2 champs');
    } else if ( !is_string($_POST['nom']) OR !is_string($_POST['comment'])) {
        // header('Location: accueil.php');
        echo('veuillez inserer du texte dans les champs');

    } else {
        $req = $bdd->prepare('INSERT INTO goldenbook(nom, comment, horodatage) VALUES(?, ?, NOW())');
        $req->execute(array(
            $_POST['nom'],
            $_POST['comment'],
        ));
        $req->closeCursor();
        header('Location: accueil.php');
    }

?>    
