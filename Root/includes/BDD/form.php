<form method="post" action="#" style="width: 100%"> <!-- Form pour envoyer des donées dans la BDD (table goldenbook)-->

    Votre nom :
    <input type="text" name="nom"> <!-- input varchar(20) -->

    <br>

    Votre message :<br><!--  input Text -->
    <textarea name="comment" rows="4" cols="15"> 
    </textarea>
    
    <br>

    <input name="submit" type="submit" value="Envoyer"> <!-- envoie l'entrée dans la table goldenbook -->
    <!-- Lors de la création de l'entrée: La Table goldenbook créée automatiquement un horodatage et une id d'entrée auto-incrémentée -->
</form>