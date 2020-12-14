<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Exercice 2 </h2>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>

    <form action="user.php" method="post">
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
    
</body>
</html>