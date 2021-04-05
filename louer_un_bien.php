<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>immobyrun</title>
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

<body class="image_de_fond">

    
    <!-- menu nav bar -->
    <?php
    include('menu.php');
    ?>
    <?php

    // afficher les donnes de la table

    $bdd = new PDO('mysql:host=localhost;dbname=servi1617577;charset=utf8', ' servi1617577', 'Simplon974');
    $reponse = $bdd->query('SELECT * FROM acheter_un_bien WHERE type="louer"');
    echo '<div class="bien">';
    while ($donnees = $reponse->fetch()) {
        echo '<form class="affichage" action="#" method="post">';
        echo '<img class="img" src="upload/' . $donnees['photo'] . '"">';
        echo '<div class="titre_maison">';
        echo $donnees['titre'];
        echo '</div>';
        echo '<button type="button" class="collapsible">+</button>';
        echo '<div class="content">';
        echo '<h3 class="formulaire_bien">Description</h3>';
        echo $donnees['description'];
        echo '<h3 class="formulaire_bien">Surface</h3>';
        echo $donnees['surface'];
        echo '<h3 class="formulaire_bien">Type de bien</h3>';
        echo $donnees['type'];
        echo '<h3 class="formulaire_bien">PRIX</h3>';
        echo $donnees['prix'];
        echo "</form>";
        echo '</div>';
    }
    echo '</div>';
    ?>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>

    <div class="titre1">
    voici les biens que nous avons !
    </div>

<!-- footer -->

<div class="footer">
    <img class="menu_logo_footer" src="https://zupimages.net/up/21/11/0wnw.png" alt="logo de l'entreprise">
    <div class="info_footer"> 
        <p>INFO PRATIQUE <br/> <a class="text_footer" href="acheter_un_bien.php">acheter</a> <br/> <a class="text_footer" href="louer_un_bien.php">louer</a> <br/> <a class="text_footer" href="gérer_son_bien.php">faire gérer</a>  <br/> <a class="text_footer" href="faire_estimer.php">faire estimer</p></a> 
        <p class="text_footer">CONTACT <br/>NOM : BEGE <br/>Prénom : Swann <br/>tél : 069396979</p> 
        <p class="text_footer">À PROPOS <br/>info légales</p>
    </div>
</div>
</body>

</html>