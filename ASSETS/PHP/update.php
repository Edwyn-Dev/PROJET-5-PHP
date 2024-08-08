<?php
include '../../DATABASE/db.php';
$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);

$stmt = $pdo->prepare('SELECT * FROM livres WHERE `id` = ?');
$stmt->execute([$params['id']]);
$livreUpdate = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Livre</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <header>
        <h1 id="header">
            <img src="../IMG/icone.png"> BIBLIO<i>NET</i> <img src="../IMG/icone.png">
        </h1>
    </header>
    <div class="container">
        <form method="post" action="CORE/exec_update.php">
            <input type="hidden" name="id" value="<?= $livreUpdate['id'] ?>" id="id">
            <label for="titre">Titre</label>
            <input type="text" name="titre" value="<?= $livreUpdate['titre'] ?>" id="titre">
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" value="<?= $livreUpdate['auteur'] ?>" id="auteur">
            <label for="date_parution">Date de Parution</label>
            <input type="date" name="date_parution" value="<?= $livreUpdate['date_parution'] ?>" id="date_parution">
            <label for="nombre_pages">Nombre de Pages</label>
            <input type="number" name="nombre_pages" value="<?= $livreUpdate['nombre_pages'] ?>" id="nombre_pages">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" value="<?= $livreUpdate['isbn'] ?>" id="isbn">
            <label for="theme">Thème</label>
            <input type="text" name="theme" value="<?= $livreUpdate['theme'] ?>" id="theme">
            <label for="description">Description</label>
            <input name="description" value="<?= $livreUpdate['description'] ?>" id="description"></input>
            <label for="editeur">Éditeur</label>
            <input type="text" name="editeur" value="<?= $livreUpdate['editeur'] ?>" id="editeur">
            <label for="langue">Langue</label>
            <input type="text" name="langue" value="<?= $livreUpdate['langue'] ?>" id="langue">
            <input type="submit" value="Modifier">
        </form>
        <a href="../../index.php"><button class="button-choices">Annuler</button></a>
    </div>
    <footer>
        <h3 id="footer">PROJET 5 | [By @Edwyn-Dev]</h3>
    </footer>
</body>

</html>