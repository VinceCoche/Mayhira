<script>

    // var moiBase = 1500;                    
    // var moiFadeout = moiBase;            
    // var moiFadein = moiBase*2;

    // var moiFade = function() {
    //     // alert("lol");
    //     $("#presentationimg1").fadeOut(moiFadeout);                        
    //     $("#presentationimg2").fadeIn(moiFadein);
        
    //     $("#moipicbutton").fadeOut(moiFadeout); // La partie quifait disparaitre le bouton et apparaitre le texte
    //     $("#moipictext").fadeIn(moiFadein);                    

    // };

    // $("#moipicbutton").click(moiFade());
    
    // var moiFade = function() {
    //     // alert("lol");
    //     $("#presentationimg1").fadeOut(moiFadeout);                        
    //     $("#presentationimg2").fadeIn(moiFadein);
        
    //     $("#moipicbutton").fadeOut(moiFadeout); // La partie quifait disparaitre le bouton et apparaitre le texte
    //     $("#moipictext").fadeIn(moiFadein);                    
    //     $("#moipictext").css("display", "flex");

    // };

    $("#moipicbutton").click(function(e) {
        var moiBase = 1500;                    
        var moiFadeout = moiBase;            
        var moiFadein = moiBase*2;

        e.preventDefault();
        $("#presentationimg1").fadeOut(moiFadeout);                        
        $("#presentationimg2").fadeIn(moiFadein);
        
        $("#moipicbutton").fadeOut(moiFadeout);
        $("#moipictext").fadeIn(moiFadein);                    
    });



</script>