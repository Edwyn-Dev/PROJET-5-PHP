<?php
include '../../../DATABASE/db.php';
include '../../CLASSES/Bibliotheque.php';

$bibliotheque = new Bibliotheque($pdo);
$resultatRecherche = $bibliotheque->chercherLivre($_POST['id']);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la Recherche</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>

<body>
    <header>
        <h1 id="header">
            <img src="../../IMG/icone.png"> BIBLIO<i>NET</i> <img src="../../IMG/icone.png">
        </h1>
    </header>
    <div class="container">
        <h2>Résultats de la Recherche</h2>
        <?php
        echo $resultatRecherche;
        ?>
        <a href="../../../index.php"><button class="button-choices">Retour</button></a>
    </div>
    <footer>
        <h3 id="footer">PROJET 5 | [By @Edwyn-Dev]</h3>
    </footer>
</body>

</html>