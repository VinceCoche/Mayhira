<script>
    var accueilBase = 1000;
    var accueilFade = accueilBase*2;
    var accueilAnima = accueilBase*7;
    // var accueilInterval = (accueilFade*2) + accueilAnima;
    var animateLeft = "45px";
    var animateTop = "330px";


    var array = <?php echo json_encode($accueilArray); ?>;



    function accueilAnim() {
        for (i = 0; i < array.length; i++){
            (function(i) {
                
                $("#accueilanim").delay(0).queue(function() {
                    $(this).html(array[i]);
                    $(this).dequeue();
                });

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

            })(i);
        }
    }


    
    var accueilLoop = function() {
        
        accueilAnim();
        accueilLoop();

    }

    $(document).ready(accueilLoop());


</script>

