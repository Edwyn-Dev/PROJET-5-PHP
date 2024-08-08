<?php
include '../../../DATABASE/db.php';
include '../../CLASSES/Livre.php';

$livre = new Livre($pdo);
$livre->creerLivre(
    $_POST['titre'], 
    $_POST['auteur'], 
    $_POST['date_parution'], 
    $_POST['nombre_pages'], 
    $_POST['isbn'], 
    $_POST['theme'], 
    $_POST['description'], 
    $_POST['editeur'], 
    $_POST['langue']
);

header('Location: ../../../index.php');
exit();
?>
