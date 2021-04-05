 <?php 
if (isset($_POST['modifier'])) {
 header('location:ajouter_bien.php');}
 if (isset($_POST['supprimer'])) {
    header('location:ajouter_bien.php');}
 ?>
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

    <a class="button_retour"href="accueil_admin.php">retour</a>
    

        <a class="button_retour" href="accueil_admin.php"></a>
        <div class="titre_ajt">
            <p>AJOUTER UN BIEN</p>
        </div>
        </form>

        <div class="ajout_un_bien">
            <form action="upload-manager.php" method="post" enctype="multipart/form-data" class="form">
                <div class="ajout_image">
                    <label for="fileSelect">Ajouter une image :</label>
                </div>
                <input class="file"type="file" name="photo" id="fileSelect">
                <h4>
                    Titre
                    <input type="text" name="titre">
                </h4>
                <h4>
                    Secteur et Description<br>
                    <textarea name="description" id="" cols="25" rows="2"></textarea>
                </h4>
                <h4>
                    Surface en m2
                    <input type="number" name="surface">
                </h4>
                <h4>
                    type de bien
                    <select name="type" id="">
                    <option value="louer">à louer</option>
                    <option value="vendre">à vendre</option>
                    </select>
                </h4>
                <h4>
                    Prix
                    <input type="number" name="prix">
                </h4>
                <input class="modifier_vendre" type="submit" name="submit" value="ajouter">
        </div>
        </form>
        </div>

    </body>

    <?php

    // afficher les donnes de la table

    $bdd = new PDO('mysql:host=localhost;dbname=servi1617577;charset=utf8', ' servi1617577', 'Simplon974');
    $reponse = $bdd->query('SELECT * FROM acheter_un_bien');
    echo '<div class="ajouter">';
    while ($donnees = $reponse->fetch()) {
        echo '<div class="formulaire">';
        echo '<form class="immobyrun" action="#" method="post">';
        echo '<img class="img1" src="upload/' . $donnees['photo'] . '"">';
        echo '<h3>titre</h3>';
        echo $donnees['titre'] . '<br>';
        echo '<h3>secteur et description</h3>';
        echo $donnees['description'] . '<br>';
        echo '<h3>surface</h3>';
        echo $donnees['surface'] . '<br>';
        echo '<h3>type</h3>';
        echo $donnees['type'] . '<br>';
        echo '<h3>prix</h3>';
        echo $donnees['prix'] . '<br>';
        echo '<input type="hidden" name="immobyrun" value="' . $donnees['id'] . '">';
        echo '<button class="supprimer" type="submit" name="supprimer"">Supprimer</button> ';
        echo '</form>';
        echo '</div>';

        // modifier un bien



        echo '<div class="formulaire_vendre">';
        echo '<form method="post">';
        echo '<button type="button" class="modifier_vendre">MODIFIER</button>';
        echo '<div class="colapse_vendre">';
        echo '<input type="hidden" name="id" value="' . $donnees['id'] . '">';
        echo '<h3>Titre</h3>';
        echo '<input type="text" name="md_titre" value="' . $donnees['titre'] . '">';
        echo '<h3>Description</h3>';
        echo '<input type="text" name="md_description" value="' . $donnees['description'] . '">';
        echo '<h3>m2</h3>';
        echo '<input type="text" name="md_surface" value="' . $donnees['surface'] . '">';
        echo '<h3>Localisation</h3>';
        echo '<input type="text" name="md_type" value="' . $donnees['type'] . '">';
        echo '<h3>PRIX</h3>';
        echo '<input type="text" name="md_prix" value="' . $donnees['prix'] . '">';
        echo '<div class="modifier_vendre">';
        echo '<input type="submit" name="modifier" value="VALIDER">' . '<br/>';
        echo '</div>';
        echo '</form>';
        echo '</div>';


  if (isset($_POST['modifier'])) {
            $requete = 'UPDATE acheter_un_bien SET titre="' . $_POST['md_titre'] . '" , description="' . $_POST['md_description'] . '" , surface="' . $_POST['md_surface'] . '" , type="' . $_POST['md_type'] . '" , prix="' . $_POST['md_prix'] . '"WHERE ID="' . $_POST['id'] . '"';
            $resultat = $bdd->query($requete);
        }
       
        echo '</div>';
        // supprimer 
        if (isset($_POST['supprimer'])) {
            $requete = 'DELETE FROM acheter_un_bien WHERE id="' . $_POST['immobyrun'] . '"';
            $resultat = $bdd->query($requete);
        }
    } 
  

    echo '</div>';
    ?>

      <!-- ajouter_un_bien -->

<?php
            if (isset($_POST['titre']) & isset($_POST['description']) & isset($_POST['surface']) & isset($_POST['type']) & isset($_POST['prix'])) {
                $bdd = new PDO('mysql:host=localhost;dbname=servi1617577;charset=utf8', 'servi1617577', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $reponse = $bdd->query('SELECT * FROM acheter_un_bien');

                $requete = 'INSERT INTO acheter_un_bien VALUES(NULL, "' . $_POST['titre'] . '", "' . $_POST['description'] . '", "' . $_POST['surface'] . '", "' . $_POST['type'] . '", "' . $_POST['prix'] . '")';
                $resultat = $bdd->query($requete);
            }
            ?>



    <script>
        var coll = document.getElementsByClassName("modifier_vendre");
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

</html>