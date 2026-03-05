<?php
require('controllers/clientsController.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Adapter le chemin si besoin :
$base = '/SAE4012_VH/SAE4012/siteLasserre';

// ROUTE PRINCIPALE
if ($uri === $base || $uri === $base . '/' || $uri === $base . '/index') {

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