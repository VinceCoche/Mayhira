<?php 
    try {
            $bdd = new PDO('mysql:host=localhost;dbname=mayhira;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch(Exception $e) {
            die('Erreur: '.$e->getMessage());
        }

        $accueilAnim = $bdd->query('SELECT id AS id, accueil_msg AS msg FROM accueilanim ORDER BY id');

        while ($message = $accueilAnim->fetch()) {
            ?> 
            <div id="accueilmsgID">
                <?php echo htmlspecialchars($message['id']); ?>
            </div>
            <p id="accueilmsgP">
                <?php echo htmlspecialchars($message['msg']); ?> 
            </p>
            <?php
        }
?>

<script>
    
    var accueilBase = 150;
    var accueilFade = accueilBase*3;
    var accueilAnima = accueilBase*7;
    var accueilInterval = (accueilFade*2) + accueilAnima;
    var animateLeft = "35px";
    var animateTop = "325px";



    var accueilAnim = function() {
        $("#accueilanim").fadeIn(accueilFade);
        $("#accueilanim").animate({
                left: "-=" + animateLeft, 
                top: "+=" + animateTop,
            }, {
                duration: accueilAnima
            });
        $("#accueilanim").fadeOut(accueilFade);
        $("#accueilanim").animate({
                left: "+=" + animateLeft, 
                top: "-=" + animateTop,
            }, {
                duration: 0
            });
    }

    var accueilLoop = function() {
        accueilAnim();
        setTimeout(accueilAnim, accueilInterval);
        accueilLoop();
    }


    $(document).ready(accueilLoop());


</script>
