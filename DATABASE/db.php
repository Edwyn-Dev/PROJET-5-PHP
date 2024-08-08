<?php
$dsn = 'mysql:host=localhost;charset=utf8';
$username = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS bibliotheque");

    $pdo->exec("USE bibliotheque");

    $createTableQuery = "
    CREATE TABLE IF NOT EXISTS livres (
        id INT AUTO_INCREMENT PRIMARY KEY,
        titre VARCHAR(255) NOT NULL,
        auteur VARCHAR(255) NOT NULL,
        date_parution DATE,
        nombre_pages INT,
        isbn VARCHAR(20) UNIQUE,
        theme VARCHAR(100),
        description TEXT,
        editeur VARCHAR(100),
        langue VARCHAR(50)
    )";
    $pdo->exec($createTableQuery);
} catch (PDOException $e) {
    ?>
    <script>alert('Erreur de connexion : ' + <?php echo json_encode($e->getMessage()); ?>);</script>
    <?php
    exit();
}
?>
