<!-- vendre -->

<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){

            } else{
                $bdd = new PDO('mysql:host=localhost;dbname=immobyrun;charset=utf8', 'admin', 'Simplon974&');
                $reponse = $bdd->query('SELECT * FROM acheter_un_bien');
                $requete = 'INSERT INTO acheter_un_bien VALUES(NULL,"' . $filename . '", "' . $_POST['titre'] . '", "' . $_POST['description'] . '", "' . $_POST['surface'] . '", "' . $_POST['type'] . '","' . $_POST['prix'] . '")';
                $resultat = $bdd->query($requete);
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
                header('location:ajouter_bien.php');
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>