<!DOCTYPE html>
<html lang="en">
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

        input{
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
        <form action="" method="post">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>

            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="tel">Tel:</label>
            <input type="text" id="tel" name="tel" required>

            <input type="submit" value="Valider">
        </form>
    </section>

</body>
</html>