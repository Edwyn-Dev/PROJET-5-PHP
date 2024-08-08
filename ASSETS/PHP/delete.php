<?php
include '../../DATABASE/db.php';

$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un Livre</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <header>
        <h1 id="header">
            <img src="../IMG/icone.png"> BIBLIO<i>NET</i> <img src="../IMG/icone.png">
        </h1>
    </header>
    <div class="container">
        <h2>Supprimer un Livre</h2>
        <form action="CORE/exec_delete.php" method="post">
            <input type="hidden" name="id" id="id" value="<?= $params['id'] ?>">
            <input type="submit" value="Confirmez la suppression">
        </form>
        <a href="../../index.php"><button class="button-choices">Annuler</button></a>
    </div>
    <footer>
        <h3 id="footer">PROJET 5 | [By @Edwyn-Dev]</h3>
    </footer>
</body>

</html>