<?php
    
    $host = 'localhost';
    $db = 'etudiant';
    $user = 'root';
    $password = '';

    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=etudiant', 'root', ' ');
        echo "Connexion réussie !!!";
    }

    catch (Exception $e)
    {
        die('Error :' . $e->getMessage());
    }



?>