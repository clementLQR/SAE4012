<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        }

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1000px;
            overflow-x: auto;
        }

        td, th {
            border: 1px solid rgb(160 160 160);
            padding: 8px 10px;
            word-break: break-word;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
<section>
    <h1>Tableau de données</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Numéro</th>
        </tr>
        <tr>
            <td>Doe</td>
            <td>John</td>
            <td>John.doe@mail.com </td>
            <td>1234567890</td>
        </tr>
    </table>


</body>
</html>