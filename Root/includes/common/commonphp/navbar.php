<navbar id="navbar">
    <div id="hamburger">
        <span class="barre"></span>
        <span class="barre"></span>
        <span class="barre"></span>
    </div>


    <div class="navcolumn" id ="navcolumn">
        <a href="presentation.php" class="navlink">
            <div class="navcell navcellresume">
                Je suis Mayhira, medium pure.<br> Mes flash peuvent prendre plusieurs formes. Il peuvent être visuels, auditifs, 
                un ressenti, ou être un message de guide. Mes flash visuels sont une image, un film, un symbole que je  perçois.<br>
                Je leverai le voile sur certains points pour vous aiguiller.
            </div>
        </a>

        <a href="accueil.php" class="navlink">
            <div class="navlink" >
                Accueil
            </div>
        </a>

        <a href="presentation.php" class="navlink">
            <div class="navlink">
                Qui suis-je
            </div>
        </a>

        <a href="contact.php" class="navlink">
            <div class="navlink">
                Contact
            </div>
        </a>

        <a href="contact.php" class="navlink">
            <div class="navcell navcelltarif">
                Consultation sur rendez-vous au 07 50 58 87 05 
            </div>
        </a>

        <div class="siret">
            N° Siret: 52525966900022
        </div>
        <?php 
            include("includes/BDD/goldenbook.php");
            include("includes/BDD/form.php");
        ?>
    </div>
    
</navbar>
