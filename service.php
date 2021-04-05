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

    <?php
    include('menu.php');
    ?>
    <!-- menu nav bar -->

    <div class="slogant">
        <p>Toute l'équipe de ImmoByRUN vous accompagne dans votre projet immobilier !</p>
    </div>


    <!-- service -->

        <h1 class="titre_nos_service">NOS SERVICES</h1>
    <div class="info">
        <div class="col">
            <div class="etiquette">
                <img src="https://zupimages.net/up/21/05/z3hx.png" class="icons">
                <p class="etiquette_titre">FAIRE GÉRER</p>
                <p class="etiquette_text">Vous souhaitez louer, vendre ou faire la promotion de votre bien immobilier ? Vous désirez être accompagné tout au long des démarches administratives de votre projet ?<br><br></p>
                <a class="etiquette_button" href="gérer_son_bien.php">+</a>
            </div>
            <div class="etiquette">
                <img src="https://zupimages.net/up/21/05/5007.png" class="icons">
                <p class="etiquette_titre">FAIRE ESTIMER</p>
                <p class="etiquette_text">Vous souhaitez mettre en vente ou transmettre, vous souhaitez louer votre bien nu, en meublé ou en location saisonnière ? Nous nous mobilisons pour avoir l'approche financière la plus juste.</p>
                <a class="etiquette_button" href="faire_estimer.php">+</a>
            </div>
        </div>
    </div>

    <!-- slogant -->

    <div class="slogant">
        <p>Parce qu'avant de trouver le bien de ses rêves, on choisit d'abord le quartier de ses rêves.</p>
    </div>


    <!-- actualités -->

    <h1 class="actu">ACTUALITES</h1>
    <div class="text_actu">
        <li class="titre_actu">voici les biens que nous avons en exclusivité</p>
    </div>
            <?php

// afficher les donnes de la table dans l'actualités

$bdd = new PDO('mysql:host=localhost;dbname=immobyrun;charset=utf8', 'admin', 'Simplon974&');
$reponse = $bdd->query('SELECT * FROM acheter_un_bien');
echo '<div class="bien_actu">';
while ($donnees = $reponse->fetch()) {
    echo '<div class="formulaire_actu">';
    echo '<form class="immobyrun" action="#" method="post">';
    echo '<img class="img1" src="upload/' . $donnees['photo'] . '"">';
    echo $donnees['titre'] . '<br>';
    echo '<input type="hidden" name="immobyrun" value="' . $donnees['id'] . '">';
    echo '</form>';
    echo '</div>';
}
echo '</div>';
?>

       <!-- footer -->

       <div class="footer">
        <img class="menu_logo_footer" src="https://zupimages.net/up/21/11/0wnw.png" alt="logo de l'entreprise">
        <div class="info_footer"> 
            <p>INFO PRATIQUE <br/> <a class="text_footer" href="acheter_un_bien.php">acheter</a> <br/> <a class="text_footer" href="louer_un_bien.php">louer</a> <br/> <a class="text_footer" href="gérer_son_bien.php">faire gérer</a>  <br/> <a class="text_footer" href="faire_estimer.php">faire estimer</p></a> 
            <p class="text_footer">CONTACT <br/>NOM : BEGE <br/>Prénom : Swann <br/>tél : 069396979</p> 
            <p class="text_footer">À PROPOS <br/>info légales</p>
        </div>
    </div>