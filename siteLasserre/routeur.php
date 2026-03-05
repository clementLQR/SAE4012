<?php
require('controllers/clientsController.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Adapter le chemin si besoin :
$base = '';

// ROUTE PRINCIPALE
if ($uri === $base || $uri === $base . '/') {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        store(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['tel']
        );

    } else {
        index();
    }

} else {
    echo "Page not found";
}


// Page affichage complet
if ($uri === $base . '/afficher') {
    showAll();
    exit();
}

// Page formulaire de recherche
if ($uri === $base . '/recherche') {
    search();
    exit();
}

// Page résultat de la recherche
if ($uri === $base . '/recherche/resultat' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    searchResult();
    exit();
}
