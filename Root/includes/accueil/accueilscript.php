<?php
    try {
            $bdd = new PDO('mysql:host=localhost;dbname=mayhira;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch(Exception $e) {
            die('Erreur: '.$e->getMessage());
        }

        $accueilAnim = $bdd->query('SELECT accueil_msg AS msg FROM accueilanim ORDER BY id');

        while ($message = $accueilAnim->fetch()) {
            ?>
            <p>
                <?php echo htmlspecialchars($message['msg']); ?> 
            </p>
            <?php
        }
?>

<script>
    var accueilBase = 100;
    var accueilFade = accueilBase*3;
    var accueilAnima = accueilBase*7;

    var accueilAnim = function() {
        $("#accueilanim").fadeIn(accueilFade);
        $("#accueilanim").animate({
                left: "-=35px", 
                top: "+=300px",
            }, {
                duration: accueilAnima
            });
        // alert("lol");
    }
    $("body").ready(accueilAnim());

</script>
