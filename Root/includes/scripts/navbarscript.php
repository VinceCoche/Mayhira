<script>// Sert à afficher/Cacher automatiquement la navbar lorsque le viewport passe en dessous d'une certaine limite (1145 px, modifiable dans navbar.css)
    var navbarBase = 200; //duréee du fadeOut pour l'animation d'apparition de la navbar (base: 200)

    var navToggle = function () {
        $("#navcolumn").toggle(navbarBase); //make the animation based on the duration stocked in the var navbarBase
    }

    $("#hamburger").click(navToggle); // if the hamburger button is clicked, trigger the fadeIn/fadeOut animation
    
</script>