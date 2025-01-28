<?php
// Page principale CookBooker
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookBooker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            margin-top: 100px;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
        }

        .buttons {
            margin-top: 20px;
        }

        button {
            display: block;
            width: 200px;
            margin: 10px auto;
            padding: 10px 20px;
            font-size: 1.2em;
            color: white;
            background-color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #555;
        }

        .logo {
            width: 100px;
            margin: 0 auto 20px;
        }

        .logo img {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="CookBooker Logo">
        </div>
        <h1>CookBooker</h1>
        <div class="buttons">
            <form action="utilisateur.php" method="get">
                <button type="submit">Utilisateur</button>
            </form>
            <form action="moderateur.php" method="get">
                <button type="submit">Modérateur</button>
            </form>
        </div>
    </div>
</body>
</html>
