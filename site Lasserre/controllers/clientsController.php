<?php
require(__DIR__ . '/../models/clients.php');

function index()
{
      require(__DIR__ . '/../views/index.php');
}

function store($nom, $prenom, $email, $tel)
{
      insert($nom, $prenom, $email, $tel);
}
