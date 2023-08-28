<script>
    var accueilBase = 1000; // Valeur standard = 1000... Pour contrôler les autres variables
    var accueilFade = accueilBase*2; // Pour regler la vitesse de fadeIn/fadeOut
    var accueilAnima = accueilBase*7; // Pour regler la vitesse de déplacement du texte
    var animateLeft = "45px"; // Pour contrôler le déplacement horizontal du texte à animer (sert à donner l'effet que la personne sur l'image "ange.png" reçoit des conseils depuis le ciel)
    var animateTop = "330px"; // Pour contrôler le déplacement vertical du texte à animer (sert à donner l'effet que la personne sur l'image "ange.png" reçoit des conseils depuis le ciel)


    var array = <?php echo json_encode($accueilArray); ?>; // Récupère les entrées de la BDD stockées dans un array depuis accueilscript.php


    function accueilAnim() {
        for (i = 0; i < array.length; i++) {
            (function(i) {
                // Mise en Queue --------------------------
                $("#accueilanim").delay(0).queue(function() { 
                    $(this).html(array[i]);
                    $(this).dequeue();
                });

                // Animation ---------------------------
                $("#accueilanim").fadeIn(accueilFade);// fait apparaitre l'entrée de la table "accueilanim" pour démarrer l'animation
                $("#accueilanim").animate({ // fait bouger selon les var animate
                    left: "-=" + animateLeft, 
                    top: "+=" + animateTop,
                }, {
                    duration: accueilAnima
                });
                $("#accueilanim").fadeOut(accueilFade); //fait dispairaitre après l'animation
                $("#accueilanim").animate({ //remet instantanément à l'endroit d'origine après le fadeOut pour redémarrer l'animation
                    left: "+=" + animateLeft, 
                    top: "-=" + animateTop,
                }, {
                    duration: 0
                });
                // Fin de l'Animation ---------------------------
                
            })(i);
        }
    }

    
    var accueilLoop = function() { // Pour boucler l'animation à l'infini
        
        accueilAnim();
        accueilLoop();

    }

    $(document).ready(accueilLoop()); // Pour démarrer l'animation dès la fin du chargement de la page


</script>
