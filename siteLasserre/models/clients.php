<?php

require("connexion.php");


function insert($nom, $prenom, $email, $tel)
{
      global $mysqli;
      $query = "INSERT INTO TB_clients_SAE (nom, prenom, email, tel) VALUES ('$nom', '$prenom', '$email', '$tel')";
      mysqli_query($mysqli, $query);
}
