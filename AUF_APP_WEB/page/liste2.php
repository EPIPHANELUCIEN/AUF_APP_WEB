<?php
include ("./connexion_bdd.php");

if (isset($_POST["submit"])){

 
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mot_de_passe = $_POST["psw"];
  
    
    
   

    $query = "INSERT INTO `administrateur` (`nom`, `prenom`,`email`, `mot_de_passe`) 
    VALUES ('$nom', '$prenom','$email', '$mot_de_passe')";

    $resultat = mysqli_query ($connexion, $query);

    if ($resultat){
        echo "enregistrement reçut";
        header ("Location: ./inscription_adm.php");
        exit;
    }
    else {
        echo "enregistrement echouer";
    }
}
?>