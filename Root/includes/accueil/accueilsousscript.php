<script>
    var accueilBase = 100;
    var accueilFade = accueilBase*3;
    var accueilAnima = accueilBase*7;
    var accueilInterval = (accueilFade*2) + accueilAnima;
    var animateLeft = "35px";
    var animateTop = "370px";


    var array = <?php echo json_encode($accueilArray); ?>;


    $(array).each(function(id= 0, msg) {
        id++;
        $("#accueilanim").text(msg);
    });

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

