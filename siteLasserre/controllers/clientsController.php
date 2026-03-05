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
    header('Location: /SAE4012_VH/SAE4012/siteLasserre/');
    exit();
}