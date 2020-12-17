<?php
$var1;
$var2=36;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Exercice 7 </h2>
    <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>

    
    <?php
    // On regarde si le tableau $_POST est vide
        if(empty($_POST)){

        // $var1 = 2;
       // s'il est vide on affiche le formulaire
        ?> 
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="gender">Civilité :</label>
            <select name="gender" id="gender" required>
                <option value="">--Mr ou Mme--</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
        </div>
        <div>
            <label for="lastname"> Votre Nom :</label>
            <input type="text" name="lastname" id="lastname" required>
        </div>
        <div>
            <label for="firstname">Votre Prénom :</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            Votre image :
            <!-- image/* permet d'aider à la selection des fichiers image -->
            <input type="file" name="file" accept="image/.png, image/.jpg" required>
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>


        <!-- L'input:files permet la création d'un tableau associatif $_FILES-->
    <?php
    } else{   // si le tableau $_POST n'est pas vide on affiche les informations qu'il contient sous la forme $_POST[name_du_champ]
        echo 'Bonjour ' . $_POST['gender'] .' '. $_POST['firstname'] .' '. $_POST['lastname'] . '<br>';

        // on va utiliser les infos combiné de la fonction pathinfo() et du tableau $_FILES
            ?>
        <p>Le nom du fichier est : <?= pathinfo($_FILES['file']['name'])['filename'];?> <br> 
        <!-- ou j'aurais pu utiliser  pathinfo($_FILES['file']['name'], PATHINFO_FILENAME); -->

        L'extension du fichier est : <?= pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);?></p>
        <!-- ou j'aurais pu utiliser  pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); -->
    <?php
    }
    ?>
</body>
</html>