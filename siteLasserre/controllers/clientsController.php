<?php
require_once __DIR__ . '/../models/clients.php';

function index()
{
    require_once __DIR__ . '/../views/index.php';
}

function store($nom, $prenom, $email, $tel)
{
    insert($nom, $prenom, $email, $tel);
    // Slashes normalisés pour éviter les surprises sur Windows
    header('Location: /afficher');
    exit();
}


// afficher toute la base
function showAll()
{
    $clients = getAllClients();
    require __DIR__ . '/../views/show.php';
}


// afficher le formulaire de recherche
function search()
{
    require __DIR__ . '/../views/search.php';
}


// afficher le résultat
function searchResult()
{
    $nom = $_POST['nom'] ?? '';
    $client = findByName($nom);
    require __DIR__ . '/../views/searchResult.php';
}
