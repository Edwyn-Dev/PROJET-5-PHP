<?php
include '../../DATABASE/db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chercher un Livre</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <header>
        <h1 id="header">
            <img src="../IMG/icone.png"> BIBLIO<i>NET</i> <img src="../IMG/icone.png">
        </h1>
    </header>
    <div class="container">
        <h2>Chercher un Livre</h2>
        <form action="CORE/exec_search.php" method="post">
            <label for="id">ID du Livre</label>
            <input type="number" name="id" id="id" required>
            <input type="submit" value="Chercher">
        </form>
        <a href="../../index.php"><button class="button-choices">Annuler</button></a>
    </div>
    <footer>
        <h3 id="footer">PROJET 5 | [By @Edwyn-Dev]</h3>
    </footer>
</body>
</html>
