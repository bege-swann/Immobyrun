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
<a class="button_retour"href="accueil_admin.php">retour</a>


    <div class="slogant">
        voici vos demande pour une gestion de bien
    </div>


    <?php

    // afficher les donnes de la table

    $bdd = new PDO('mysql:host=localhost;dbname=servi1617577;charset=utf8', ' servi1617577', 'Simplon974');
    $reponse = $bdd->query('SELECT * FROM faire_gerer');
    echo '<div class="demande_pour_faire_gérer_un_bien">';
    while ($donnees = $reponse->fetch()) {
        echo '<div class="formulaire">';
        echo '<form class="affichage_gerer" action="#" method="post">';
        echo '<div class="titre_gerer"> gerer mon bien ';
        echo '</div>';
        echo '<h3>nom</h3>';
        echo $donnees['nom'];
        echo '<h3>prenom</h3>';
        echo $donnees['prenom'];
        echo '<h3>tel</h3>';
        echo $donnees['tel'];
        echo '<h3>adresse mail</h3>';
        echo $donnees['mail'];
        echo '<h3>type de bien</h3>';
        echo $donnees['type'];
        echo '<h3>m2</h3>';
        echo $donnees['m2'];
        echo '<h3>localisation</h3>';
        echo $donnees['localisation'];
        echo '<h3>description</h3>';
        echo $donnees['description'];
        echo '<input type="hidden" name="immobyrun" value="' . $donnees['id'] . '">';
        echo '<button class="supprimer" type="submit" name="supprimer"">supprimer</button> ';
        echo '</form>';
        echo '</div>';
        // supprimer le film
        if (isset($_POST['supprimer'])) {
            $requete = 'DELETE FROM faire_gerer WHERE id="' . $_POST['immobyrun'] . '"';
            $resultat = $bdd->query($requete);
            header("Refresh:0");
        }
    }
    echo '</div>';
    ?>