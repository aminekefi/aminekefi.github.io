<?php
      try
      {
        // Connexion à la base de données
        $con = new PDO('mysql:host=localhost;dbname=amine-cv;charset=utf8' , 'root' , 'amine');
      } catch (Exception $e)
      {
        die('Erreur de connexion.' . $e-> getMessage());
      }
?>