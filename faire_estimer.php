<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- police -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&family=Ubuntu:wght@400&display=swap" rel="stylesheet">
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
    <div class="titre_estimation">
        vous voulez faire estimer votre bien avec une agence immobilière sérieuse ? Laissez nous faire.
    </div>
<h1 class="contact_estimation">
    Nous contacter pour une estimation
</h1>

    <div class="contacter_estimer">
        <form action="#" method="post" class="form">
            <h4>
                Nom
                <input type="text" name="nom">
            </h4>
            <h4>
                Prénom
                <input type="text" name="prenom">
            </h4>
            <h4>
                tel
                <input type="text" name="tel">
            </h4> 
            <h4>
                adresse mail
                <input type="text" name="mail">
            </h4>
            <h4>
                bien souhaiter<br>
                    <textarea name="type" id="" cols="25" rows="2"></textarea>
            </h4>
            <h4>
                m2
                <input type="text" name="m2">
            </h4>
            <h4>
                localisation
                <input type="text" name="localisation">
            </h4>
            <h4>
                budget
                <input type="text" name="budget">
            </h4>
            <input class="modifier_vendre"type="submit" value="Envoyer">
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



<?php

// ajouter un bien 

$bdd = new PDO('mysql:host=localhost;dbname=servi1617577;charset=utf8', ' servi1617577', 'Simplon974');
$reponse = $bdd->query('SELECT * FROM faire_estimer');
if (!empty($_POST['nom']) & !empty($_POST['prenom']) & !empty($_POST['tel']) & !empty($_POST['mail']) & !empty($_POST['type']) & !empty($_POST['m2']) & !empty($_POST['localisation']) & !empty($_POST['budget'])) {

    $requete = 'INSERT INTO faire_estimer VALUES(NULL, "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '", "' . $_POST['tel'] . '", "' . $_POST['mail'] . '","' . $_POST['type'] . '","' . $_POST['m2'] . '","' . $_POST['localisation'] . '","' . $_POST['budget'] . '")';
    $resultat = $bdd->query($requete);
    echo 'votre message a bien été envoyer';
}   
 


?>