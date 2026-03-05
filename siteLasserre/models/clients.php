
<?php
require("connexion.php");

// uniquement l’insertion
function insert($nom, $prenom, $email, $tel)
{
    global $mysqli;
    $query = "INSERT INTO TB_clients_SAE (nom, prenom, email, tel)
              VALUES ('$nom', '$prenom', '$email', '$tel')";
    mysqli_query($mysqli, $query);
}


// récupérer toute la base
function getAllClients()
{
    global $mysqli;
    $sql = "SELECT * FROM TB_clients_SAE";
    $result = mysqli_query($mysqli, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


// recherche par nom
function findByName($nom)
{
    global $mysqli;
    $nom = mysqli_real_escape_string($mysqli, $nom);
    $sql = "SELECT * FROM TB_clients_SAE WHERE nom = '$nom'";
    $result = mysqli_query($mysqli, $sql);
    return mysqli_fetch_assoc($result);
}
