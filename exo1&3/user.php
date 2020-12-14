<?php

// empty permet de tester si la variable est vide, elle renvoie true si c'est vide donc on ajoute '!' avant
    if(!empty($_GET['lastname']) && !empty($_GET['firstname'])){
        $bonjour = 'Bonjour ' . ucfirst(strtolower($_GET['firstname'])) . ' ' . strtoupper($_GET['lastname']);
    } else{
        $bonjour = 'Vous n\'avez pas rempli tout les champs du formulaire';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $bonjour?>
</body>
</html>