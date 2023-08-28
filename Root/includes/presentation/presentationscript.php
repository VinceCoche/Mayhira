<script>

    /* Script pour faire disparaitre le bouton et afficher le texte sur la page presentation.php via le contenu de "includes/presentation/presentationbody.php" */

    $("#moipicbutton").click(function(e) {
        var moiBase = 1500 /* (Valeur originale: 1500)  Valeur de Base pour contrôler toutes les autres variable de cette fonction, qui sont des multiples de cette var */                     
        var moiFadeout = moiBase;   /* (Egale à var moiBase) contôle la durée du .fadeOut qui fait disparaitre le bouton et l'image de background*/         
        var moiFadein = moiBase*2; /* Fait apparaitre le texte de présentation */


        e.preventDefault(); /* empêche de refresh la page lors de la pression du bouton #moipicbutton et permet à la fonction de s'executer correctement*/

        /* S'occupe des images (fadeIn/fadeOut) */
        $("#presentationimg1").fadeOut(moiFadeout); /* fait disparaitre l'image 1 */                       
        $("#presentationimg2").fadeIn(moiFadein); /* fait apparaitre l'image 2' */ 
        
        
        /* S'occupe du bouton et du texte (fadeIn/fadeOut) */
        $("#moipicbutton").fadeOut(moiFadeout); /* fait disparaitre le bouton */ 
        $("#moipictext").fadeIn(moiFadein); /* fait apparaitre le texte */ 
    });


</script>