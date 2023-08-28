<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!--  lien vers librairie JQuery -->

        <title>Accueil - Chez Mayhira</title>

        <?php include("includes/links/stylesheetinclude.php") ?><!--Pour centraliser tout les fichiers .css-->
    </head>
    <body>
        <!-- Contenu commun à toutes les pages () -->
            <?php include("includes/common/allcommon.php"); ?>
        <!-- Fin -->

        <!-- Contenu du Body de l'accueil-->
            <?php include("includes/accueil/accueilbody.php"); ?>
        <!-- Fin du Contenu du Body de l'accueil-->
    </body>
</html>