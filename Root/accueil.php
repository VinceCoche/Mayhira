<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Accueil - Chez Mayhira</title>
        <?php include("includes/links/stylesheetinclude.php") ?> <!--  LIEN VERS TOUT LES FICHIERS CSS -->
        <?php include("includes/scripts/jquerylibrary.php");?><!--  Lien vers la librairie JQuery -->
    </head>
    <body>
        <!-- Contenu du header () -->
            <?php include("includes/common/allcommon.php");?>
        <!-- Fin du header () -->

        <!-- Contenu du Body de l'accueil-->
            <?php include("includes/accueil/accueilbody.php");?>
            <?php include("includes/accueil/accueilJS.php");?>
        <!-- Fin du Contenu du Body de l'accueil-->
    </body>

</html>