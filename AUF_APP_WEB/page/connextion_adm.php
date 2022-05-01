<?php
    $connexion = new mysqli ("localhost","root","","administrateur");

    if ($connexion->connect_error){
        echo "Connexion à Echouer";
    }
    else {
        echo "Connexion Etablie avec succès"; 
    }
?>