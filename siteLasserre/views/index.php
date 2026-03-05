<?php
require_once(__DIR__ . '/../controllers/clientsController.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    store($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel']);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion / inscription</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 0px;
            margin-top: 0px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 4px 1px 4px 1px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #555;
            color: #fff;
            cursor: pointer;
            padding: 10px;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>
</head>

<body>

    <section>
        <h1>CONNEXION / INSCRIPTION</h1>
        <form method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="tel">Tel:</label>
            <input type="tel" name="tel" pattern="^[0-9]{10}$" inputmode="numeric" placeholder="0612345678" title="Entrez exactement 10 chiffres (pas d'espaces ni de symboles)" required>

            <input type="submit" value="Valider">
        </form>
    </section>

</body>

</html>