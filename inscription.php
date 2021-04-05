<?php if (isset($_POST['ajouter'])) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />
    <link rel="stylesheet" href="inscription.css">

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

    // inscription

    $bdd = new PDO('mysql:host=localhost;dbname=servi1617577;charset=utf8', ' servi1617577', 'Simplon974');
    $reponse = $bdd->query('SELECT * FROM sidentifier');
    if (!empty($_POST['nom']) & !empty($_POST['prenom']) & !empty($_POST['password'])  & !empty($_POST['re_password']) & !empty($_POST['email'])) {
        if ($_POST['password'] == $_POST['re_password']) {

            //Cryptage du mot de passe et récupération de la date actuelle

        $mot_de_passe_crypte = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $requete = 'INSERT INTO sidentifier VALUES(NULL, "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '", "' . $mot_de_passe_crypte . '", "' . $_POST['email'] . '")';
            $resultat = $bdd->query($requete);
            header('location:connexion.php');
        }
        else {

            $erreur = 'Reverifiez les mot de passe';
         }
        
    }


    ?>


    <div class="login-form">
        <div class="logo_ir">
            <img src="https://zupimages.net/up/21/06/wn80.png" width="250px">
        </div>


        <h2 class="titre">
            Inscription
        </h2>
        <div>
            <form action="#" method="post" class="form">
                <div class="form_groupe">
                    <label for="nom">Nom
                        <input id="nom" type="text" name="nom" class="form1" required="required" autocomplete="off">
                    </label>
                </div>
                <div class="form_groupe">
                    <label for="prenom">Prenom
                        <input id="prenom" type="text" name="prenom" class="form1" required="required" autocomplete="off">
                    </label>
                </div>
                <div class="form_groupe">
                    <label for="password">Mot de passe
                        <input id="password" type="password" name="password" class="form1" name="mot de passe" required="required" autocomplete="off" minlength="2" maxlength="40">
                    </label>
                </div>
                <div class="form_groupe">
                    <label for="re_password">Retapez le mot de passe
                        <input id="re_password" type="password" name="re_password" class="form1" name="mot de passe" required="required" autocomplete="off" minlength="2" maxlength="50">
                    </label>
                </div>
                <div class="form_groupe">
                    <label for="email">Email
                        <input id="email" type="email" name="email" class="form1" required="required" autocomplete="off" minlength="2" maxlength="50">
                    </label>
                </div>
                <button class="valider" name="button">
                    valider
                </button>
        </div>
        </form>
    </div>
</body>

</html>