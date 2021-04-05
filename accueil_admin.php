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
    <div class="menu">
    <div class="menu_logo"><img src="https://zupimages.net/up/21/11/0wnw.png" alt="logo de l'entreprise"></div>
    <div class="menu_lien">
        <ul class="menu_liste">
            <li><a class="menu_liste" href="index.php">accueil</a></li>
            <li><a class="menu_liste" href="acheter_un_bien.php">acheter</a></li>
            <li><a class="menu_liste" href="louer_un_bien.php">louer</a></li>
            <li><a class="menu_liste" href="service.php">service</a></li>
        </ul>
        
    </div>
    <a  class="button_deconnexion"href="logout.php">se deconnecter</a>
</div>

    
    <!-- service -->

        <h1 class="gerer_annonce">GÉRER LES ANNONCES</h1>
    <div class="info">
        <div class="col">
            <div class="etiquette">
                <img src="https://zupimages.net/up/21/05/kp95.png" class="icons">
                <p class="titre_admin"><br><br>AJOUTER UN BIEN</p>
                    <a class="button_admin" href="ajouter_bien.php"><br>+</a>
            </div>
            <div class="etiquette">
                <img src="https://zupimages.net/up/21/05/z3hx.png" class="icons">
                <p class=titre_admin><br>DEMANDE POUR UNE GESTION DE BIEN<br><br></p>
                <a class="button_admin" href="demande_faire_gerer.php">+</a>
            </div>
            <div class="etiquette">
                <img src="https://zupimages.net/up/21/05/5007.png" class="icons">
                <p class=titre_admin><br>DEMANDE DE RENDEZ-VOUS POUR UNE ESTIMATION</p>
                <a class="button_admin" href="demande_rdv_pour_une_estimation.php">+</a>
            </div>
        </div>
    </div>  
    
    <!-- actualités -->

<h1 class="actu">ACTUALITES</h1>
<div class="text_actu">
    <li class="titre_actu">voici les biens que nous avons !</p>
</div>
        <?php

// afficher les donnes de la table dans l'actualités

$bdd = new PDO('mysql:host=localhost;dbname=servi1617577;charset=utf8', ' servi1617577', 'Simplon974');
$reponse = $bdd->query('SELECT * FROM acheter_un_bien');
echo '<div class="bien_actu">';
while ($donnees = $reponse->fetch()) {
echo '<div class="formulaire_actu">';
echo '<form class="immobyrun" action="#" method="post">';
echo '<img class="img1" src="upload/' . $donnees['photo'] . '"">';
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