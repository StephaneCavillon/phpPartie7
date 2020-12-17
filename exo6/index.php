<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Exercice 6 </h2>
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises     doivent l'être. Dans le cas contraire, c'est l'inverse.  

    N'utiliser qu'une seule page.</p>
    <?php
    if(empty($_POST)){
        ?>
    <form action="index.php" method="post">
        <div>
            <label for="gender">Civilité :</label>
            <select name="gender" id="gender" >
                <option value="">--Mr ou Mme--</option>
                <option value="Mr">Monsieur</option>
                <option value="Mme">Madame</option>
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
            <input type="submit" value="Envoyer">
        </div>
    </form>

    <?php
        } else{
            // stocker les données dans des variables peut permettre de les tester par des REGEX et ensuite on sera certain que la variable contient bien les données au format voulu
            echo 'Bonjour ' . $_POST['gender'] .' '. $_POST['firstname'] .' '. $_POST['lastname'];
        }
    ?>
    
</body>
</html>