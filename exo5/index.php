<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Exercice 5 </h2>
    <p>Créer un formulaire sur la page index.php avec :  

        Une liste déroulante pour la civilité (Mr ou Mme)
        Un champ texte pour le nom
        Un champ texte pour le prénom  


    Ce formulaire doit rediriger vers la page index.php. 
    Vous avez le choix de la méthode.</p>
    <!-- en ne mettant rien dans l'attribut action il envoie automatiquement sur la même page -->
    <form action="" method="post">
        <div>
            <label for="gender">Civilité :</label>
            <select name="gender" id="gender" >
                <option value="">--Mr ou Mme--</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
        </div>
        <div>
            <label for="lastname"> Votre Nom :</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div>
            <label for="firstname">Votre Prénom :</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <input type="submit" name="button" value="Envoyer">
        </div>
    </form>

    <?php
        if(isset($_POST['button'])){
            echo 'le bouton à été cliqué';
        }

    ?>
    
</body>
</html>