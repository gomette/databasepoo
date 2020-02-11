<?php
require_once('../modele/log.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>

    <link rel="stylesheet" href="script/style.css">
    <script src="script.js"></script>
</head>

<body>

    <div class="conn">
    <h2>Connexion</h2>
    <form method="POST" action="modele/select.php">
            <input type="text" name="Nom" placeholder="Nom">
            <input type="text" name="Prenom" placeholder="Prenom">
            <input type="text" name="Mail" placeholder="Mail">
            <input type="text" name="Pass" placeholder="Password">
            <input type="submit">
        </form>
    </div>

</body>

</html>