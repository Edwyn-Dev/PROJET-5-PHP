<?php
include 'ASSETS/PHP/INCLUDE/header.php';
include 'DATABASE/db.php';
include 'ASSETS/CLASSES/Bibliotheque.php';

$bibliotheque = new Bibliotheque($pdo);
$livres = $bibliotheque->afficherTousLesLivres();
?>
<div class="container">
    <div class="button-container">
        <a href="ASSETS/PHP/create.php" class="button-choices">
            Créer
        </a>
        <a href="ASSETS/PHP/search.php" class="button-choices">
            Chercher
        </a>
    </div>

    <div class="livres-container">
        <?php echo $livres; ?>
    </div>
</div>
<?php
include 'ASSETS/PHP/INCLUDE/footer.php';
?>