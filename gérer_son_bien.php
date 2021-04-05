<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- police -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Asap:ital,wght@1,500&display=swap" rel="stylesheet">


</head>

<body>
    <!-- menu nav bar -->
    <?php
    include('menu.php');
    ?>
    <div class="slogant">
        vous voulez faire gérer votre bien avec une agence immobilière sérieuse ? Laissez nous faire.
    </div>

    <div class="titre_slogant">
        Contacter nous !
    </div>

    <div class="contacter_estimer">
        <form action="#" method="post" class="estimer">
            <h3>
                Nom
                <input type="text" name="nom">
            </h3>
            <h3>
                Prénom
                <input type="text" name="prenom">
            </h3>
            <h3>
                tel
                <input type="tel" name="tel">
            </h3>
            <h3>
                adresse mail
                <input type="text" name="mail">
            </h3>
            <h3>
                type de bien
                <input type="m2" name="type">
            </h3>
            <h3>
                m2
                <input type="number" name="m2">
            </h3>
            <h3>
                localisation
                <input type="text" name="localisation">
            </h3>
            <h3>
                Description<br>
                <textarea name="description" id="" cols="25" rows="2"></textarea>
            </h3>
            <input class="supprimer" type="submit" name="submit" value="envoyé">
    </div>
</body>

</html>



<?php

// ajouter un bien 

$bdd = new PDO('mysql:host=localhost;dbname=servi1617577;charset=utf8', ' servi1617577', 'Simplon974');
$reponse = $bdd->query('SELECT * FROM faire_gerer');
if (!empty($_POST['nom']) & !empty($_POST['prenom']) & !empty($_POST['tel']) & !empty($_POST['mail']) & !empty($_POST['type']) & !empty($_POST['m2']) & !empty($_POST['localisation']) & !empty($_POST['description'])) {

    $requete = 'INSERT INTO faire_gerer VALUES(NULL, "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '", "' . $_POST['tel'] . '", "' . $_POST['mail'] . '","' . $_POST['type'] . '","' . $_POST['m2'] . '","' . $_POST['localisation'] . '","' . $_POST['description'] . '")';
    $resultat = $bdd->query($requete);
    echo 'votre message a bien été envoyer';
}



?>