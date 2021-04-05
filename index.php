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
    <link href="https://fonts.googleapis.com/icon?family=Material+etiquette_icons" rel="stylesheet">
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

    <div class="info">
        <div class="nos_service">
             <a href="service.php"><p class="titre_nos_service">NOS SERVICES</p></a>
            <div class="service">
                <div class="etiquette">
                    <img src="https://zupimages.net/up/21/05/kp95.png" class="etiquette_icons">
                    <p class="etiquette_titre">ACHETER</p>
                    <p class="etiquette_text">Acheter un bien immobilier est un acte engageant. Résidence principale ou un investissement locatif, nous sommes à vos côtés pour trouver le bien idéal !<br><br><br></p>
                    <a class="etiquette_button" href="acheter_un_bien.php">+</a>
                </div>
                <div class="etiquette">
                    <img src="https://zupimages.net/up/21/05/45hi.png" class="etiquette_icons">
                    <p class=etiquette_titre>LOUER</p>
                    <p class="etiquette_text">Vous chercher une maison a louer avec un secteur précis? vous ne voulais pas avoir de problème avec les propriétaire. Laissez-nous faire ! <br><br><br></p>
                    <a class="etiquette_button" href="louer_un_bien.php">+</a>
                </div>
                <div class="etiquette">
                    <img src="https://zupimages.net/up/21/05/z3hx.png" class="etiquette_icons">
                    <p class=etiquette_titre>FAIRE GÉRER</p>
                    <p class="etiquette_text">Vous souhaitez louer, vendre ou faire la promotion de votre bien immobilier ? Vous désirez être accompagné tout au long des démarches administratives de votre projet ?<br><br></p>
                    <a class="etiquette_button" href="gérer_son_bien.php">+</a>
                </div>
                <div class="etiquette">
                    <img src="https://zupimages.net/up/21/05/5007.png" class="etiquette_icons">
                    <p class=etiquette_titre>FAIRE ESTIMER</p>
                    <p class="etiquette_text">Vous souhaitez mettre en vente ou transmettre, vous souhaitez louer votre bien nu, en meublé ou en location saisonnière ? Nous nous mobilisons pour avoir l'approche financière la plus juste.</p>
                    <a class="etiquette_button" href="faire_estimer.php">+</a>
                </div>
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
        <li class="titre_actu">voici les biens que nous avons !</p>
    </div>
            <?php

// afficher les donnes de la table dans l'actualités

$bdd = new PDO('mysql:host=185.98.131.148;dbname=servi1617577;charset=utf8', ' servi1617577', 'Simplon974');
$reponse = $bdd->query('SELECT * FROM acheter_un_bien');
echo '<div class="bien_actu">';
while ($donnees = $reponse->fetch()) {
    echo '<div class="formulaire_actu">';
    echo '<form class="immobyrun" action="#" method="post">';
    echo '<img class="img_actu" src="upload/' . $donnees['photo'] . '"">';
    echo "<br>\n";
    echo $donnees['titre'] . '';
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
            <p>INFO PRATIQUE <br/> <a class="text_footer" href="acheter_un_bien.php">acheter <br/> <a class="text_footer" href="louer_un_bien.php">louer</a> <br/> <a class="text_footer" href="gérer_son_bien.php">faire gérer</a>  <br/> <a class="text_footer" href="faire_estimer.php">faire estimer</p></a> 
            <p>CONTACT <br/><a class="text_footer" href="">NOM : BEGE <br/>Prénom : Swann <br/>tél : 069396979</p></a> 
            <p>À PROPOS <br/><a class="text_footer" href="">info légales</a></p>
        </div>
    </div>
</body>

</html>