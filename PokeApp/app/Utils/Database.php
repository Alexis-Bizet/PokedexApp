<?php

namespace App\Utils;
use PDO;

class Database
{
    // Paramètres de connexion à la base de données
    private $server = "localhost"; // Adresse du serveur MySQL
    private $username = "root"; // Nom d'utilisateur MySQL
    private $dbname = "Pokedex"; // Nom de la base de données

    // Propriété pour stocker la connexion PDO
    private $conn;

    public function __construct()
    {
        // Vous pouvez initialiser la connexion ici, mais sans l'instancier directement
        // L'instanciation de la connexion se fera à la demande (lazy loading)
    }

    // Méthode pour obtenir la connexion PDO
    public function getPDO()
    {
        if (!$this->conn) {
            try {
                $this->conn = new PDO("mysql:host={$this->server};dbname={$this->dbname}", $this->username);
                // Configurer PDO pour afficher les erreurs
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "La connexion à la base de données a échoué : " . $e->getMessage();
            }
        }
        return $this->conn;
    }
}

