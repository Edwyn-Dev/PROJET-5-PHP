<?php

class Bibliotheque
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function chercherLivre($id)
    {
        $sql = "SELECT * FROM livres WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $livre = $stmt->fetch();
        if ($livre) {
            return $this->afficherLivre($livre);
        } else {
            return $this->afficherMessage("Aucun livre trouvé avec l'ID $id.", "error");
        }
    }


    public function afficherTousLesLivres()
    {
        $sql = "SELECT * FROM livres";
        $stmt = $this->pdo->query($sql);
        $livres = $stmt->fetchAll();
        if ($livres) {
            return $this->afficherListeLivres($livres);
        } else {
            return $this->afficherMessage("Aucun livre trouvé.", "error");
        }
    }

    public function afficherLivresFiltre($colonne, $valeur)
    {
        $sql = "SELECT * FROM livres WHERE $colonne = :valeur";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':valeur' => $valeur]);
        $livres = $stmt->fetchAll();
        if ($livres) {
            return $this->afficherListeLivres($livres);
        } else {
            return $this->afficherMessage("Aucun livre trouvé pour le filtre $colonne = $valeur.", "error");
        }
    }

    private function afficherLivre($livre)
    {
        $html = "<div class='livre'>
            <h2>{$livre['titre']}</h2>
            <p><strong>Auteur:</strong> {$livre['auteur']}</p>
            <p><strong>Date de parution:</strong> {$livre['date_parution']}</p>
            <p><strong>Nombre de pages:</strong> {$livre['nombre_pages']}</p>
            <p><strong>ISBN:</strong> {$livre['isbn']}</p>
            <p><strong>Thème:</strong> {$livre['theme']}</p>
            <p><strong>Description:</strong> {$livre['description']}</p>
            <p><strong>Éditeur:</strong> {$livre['editeur']}</p>
            <p><strong>Langue:</strong> {$livre['langue']}</p>";

        if (basename($_SERVER['PHP_SELF']) == 'index.php') {
            $html .= "<div class='button-container'>
                <a href='ASSETS/PHP/update.php?id={$livre['id']}' class='update'>
                    Modifier
                </a>
                <a href='ASSETS/PHP/delete.php?id={$livre['id']}' class='delete'>
                    Supprimer
                </a>
            </div>";
        }

        $html .= "</div>";
        return $html;
    }


    private function afficherListeLivres($livres)
    {
        $html = "<div class='liste-livres'>";
        foreach ($livres as $livre) {
            $html .= $this->afficherLivre($livre);
        }
        $html .= "</div>";
        return $html;
    }

    private function afficherMessage($message, $type)
    {
        $class = $type == "success" ? "message-success" : "message-error";
        return "<div class='container $class'>$message</div>";
    }
}
?>