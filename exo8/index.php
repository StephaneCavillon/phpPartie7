<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Exercice 8 </h2>
    <p>Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</p>
    
    <?php
    // On regarde si le tableau $_POST est vide
    if(empty($_POST)){
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
            Votre document :
            <!-- image/* permet d'aider à la selection des fichiers  -->
            <input type="file" name="file" accept=".pdf">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>


        <!-- L'input:files permet la création d'un tableau associatif $_FILES-->
    <?php
        } else{   // si le tableau $_POST n'est pas vide on affiche les informations qu'il contient sous la forme $_POST[name_du_champ]
            echo 'Bonjour ' . $_POST['gender'] .' '. $_POST['firstname'] .' '. $_POST['lastname'] . '<br>';

            //On va vérifier que l'extension du fichier chargé est bien autorisé
            // on va utiliser les infos combiné de la fonction pathinfo() et du tableau $_FILES
            // echo $_FILES['file']['name']; --> donne le nom du fichier nom.extension
            $extension_fichier = pathinfo($_FILES['file']['name'])['extension'];
            $extension_autorisé = 'pdf';
            //on test grace à in_array
            if(in_array($extension_fichier, $extension_autorisé)){
                ?>
                <p> 'Le fichier est bien chargé,<br>               
                Le nom du fichier est : <?= pathinfo($_FILES['file']['name'])['filename'];?> <br>

                L'extension du fichier est : <?= $extension_fichier;?></p>

                <?php
            } else{ // si le fichier n'est pas valide
                ?>
                <p>Le type du fichier n'est pas valide </p>
                <?php
            }
        }

// J'ai essayé d'utiliser les options de pathinfo mais pas réussi
            /*echo 'Le nom de votre fichier est : ' . pathinfo($_FILES['file']['name'], 5). '<br>';

            echo 'L\'extension de votre fichier est : ' . pathinfo($_FILES['file']['name'], 4);*/
    ?>
</body>
</html>