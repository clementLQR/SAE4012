<?php
require('controllers/clientsController.php');

$uri = $_SERVER['REQUEST_URI'];
// echo "ROUTER -- OK<br>"; // Debug pour voir si le route est accédé

$uri = parse_url($uri);

// ROUTE
if ($uri['path'] == '/index') {

      if ($_REQUEST['REQUEST_METHOD'] == 'POST') {
            $module = $_POST['module'];
            $note = $_POST['note'];
            $commentaire = $_POST['commentaire'];
            $enseignant = $_POST['enseignant'];
            $etudiant = $_POST['etudiant'];
            store($module, $note, $commentaire, $enseignant, $etudiant);
      } else {
            // Affiche l'index
            return index();
      }
} else {
      echo "Page not found";
}
