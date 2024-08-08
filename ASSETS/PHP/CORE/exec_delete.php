<?php
include '../../../DATABASE/db.php';
include '../../CLASSES/Livre.php';

$livre = new Livre($pdo);
$livre->supprimerLivre($_POST['id']);

header('Location: ../../../index.php');
exit();
?>
