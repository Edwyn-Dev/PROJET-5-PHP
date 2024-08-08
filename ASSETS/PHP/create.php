<?php
include '../../DATABASE/db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Livre</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <header>
        <h1 id="header">
            <img src="../IMG/icone.png"> BIBLIO<i>NET</i> <img src="../IMG/icone.png">
        </h1>
    </header>
    <div class="container">
        <h2>Créer un Livre</h2>
        <form action="CORE/exec_create.php" method="post">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" required>
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" id="auteur" required>
            <label for="date_parution">Date de Parution</label>
            <input type="date" name="date_parution" id="date_parution">
            <label for="nombre_pages">Nombre de Pages</label>
            <input type="number" name="nombre_pages" id="nombre_pages">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" required>
            <label for="theme">Thème</label>
            <input type="text" name="theme" id="theme">
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
            <label for="editeur">Éditeur</label>
            <input type="text" name="editeur" id="editeur">
            <label for="langue">Langue</label>
            <input type="text" name="langue" id="langue">
            <input type="submit" value="Créer">
        </form>
        <a href="../../index.php"><button class="button-choices">Annuler</button></a>
    </div>
    <footer>
        <h3 id="footer">PROJET 5 | [By @Edwyn-Dev]</h3>
    </footer>
</body>
</html>
