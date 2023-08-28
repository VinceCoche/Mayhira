<navbar id="navbar">
    <div id="hamburger"> <!--Bouton pour la navigation mobile qui ne s'affiche qu lorsque le viewport est en dessous d'un cértaine largeur (1145px)-->
        <span class="barre"></span> <!-- span pour faire un bouton Hamburger -->
        <span class="barre"></span>
        <span class="barre"></span>
    </div>


    <div class="navcolumn" id="navcolumn"> <!-- Conteneur général de la barre de navigation latérale -->
        <a href="presentation.php" class="navlink"> <!-- texte de présentation dans la navbar -->
            <div class="navcell navcellresume"> <!-- Texte de présentation voulu par la Product Owner -->
                Je suis Mayhira, medium pure.<br> Mes flash peuvent prendre plusieurs formes. Il peuvent être visuels, auditifs, 
                un ressenti, ou être un message de guide. Mes flash visuels sont une image, un film, un symbole que je  perçois.<br>
                Je leverai le voile sur certains points pour vous aiguiller.
            </div>
        </a>

        <a href="accueil.php" class="navlink"> <!-- Lien vers accueil.php (toute la box est le lien)  -->
            <div class="navlink" >
                Accueil
            </div>
        </a>

        <a href="presentation.php" class="navlink"> <!-- Lien vers presentation.php (toute la box est le lien)  -->
            <div class="navlink">
                Qui suis-je
            </div>
        </a>

        <a href="contact.php" class="navlink"> <!-- Lien vers contact.php (toute la box est le lien)  -->
            <div class="navlink">
                Contact
            </div>
        </a>

        <a href="contact.php" class="navlink"> <!-- Aussi un lien vers Contact.php -->
            <div class="navcell navcelltarif">
                Consultation sur rendez-vous au <br> 07 50 58 87 05 
            </div>
        </a>

        <div class="siret"> <!-- Numéro Siret du PO -->
            N° Siret: 52525966900022
        </div>
        <?php /* formulaires de commentaires/Livre d'or (interaction avec une BDD) */
            include("includes/BDD/goldenbook.php"); // Lien vers le script d'interaction avec la BDD "goldenbook"
            include("includes/BDD/form.php");// Lien vers le formulaire
        ?>
    </div>
    
</navbar>
