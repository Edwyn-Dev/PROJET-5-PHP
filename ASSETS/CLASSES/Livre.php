<?php

class Livre
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function creerLivre($titre, $auteur, $date_parution, $nombre_pages, $isbn, $theme, $description, $editeur, $langue)
    {
        try {
            $sql = "INSERT INTO Livres (titre, auteur, date_parution, nombre_pages, isbn, theme, description, editeur, langue) 
                    VALUES (:titre, :auteur, :date_parution, :nombre_pages, :isbn, :theme, :description, :editeur, :langue)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':titre' => $titre,
                ':auteur' => $auteur,
                ':date_parution' => $date_parution,
                ':nombre_pages' => $nombre_pages,
                ':isbn' => $isbn,
                ':theme' => $theme,
                ':description' => $description,
                ':editeur' => $editeur,
                ':langue' => $langue
            ]);
            echo $this->afficherMessage("Livre créé avec succès!", "success");
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function modifierLivre($id, $titre, $auteur, $date_parution, $nombre_pages, $isbn, $theme, $description, $editeur, $langue)
    {
        try {
            $sql = "UPDATE Livres 
                    SET titre = :titre, auteur = :auteur, date_parution = :date_parution, nombre_pages = :nombre_pages, isbn = :isbn, theme = :theme, description = :description, editeur = :editeur, langue = :langue 
                    WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':titre' => $titre,
                ':auteur' => $auteur,
                ':date_parution' => $date_parution,
                ':nombre_pages' => $nombre_pages,
                ':isbn' => $isbn,
                ':theme' => $theme,
                ':description' => $description,
                ':editeur' => $editeur,
                ':langue' => $langue,
                ':id' => $id
            ]);
            echo $this->afficherMessage("Livre modifié avec succès!", "success");
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function supprimerLivre($id)
    {
        $sql = "DELETE FROM Livres WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        echo $this->afficherMessage("Livre supprimé avec succès!", "success");
    }

    private function afficherMessage($message, $type)
    {
        $class = $type == "success" ? "message-success" : "message-error";
        return "<div class='container $class'>$message</div>";
    }
}
?>