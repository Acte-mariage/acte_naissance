<?php

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createUser($username, $password, $email) {
        // Hashage du mot de passe pour des raisons de sécurité
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Préparation de la requête SQL pour l'insertion d'un utilisateur dans la base de données
        $stmt = $this->db->prepare("INSERT INTO client (username, password,email) VALUES (?, ?,?)");
        // Exécution de la requête avec les valeurs fournies
        return $stmt->execute([$username, $hashedPassword,$email]);
    }

    public function getUserByUsername($username) {
        // Préparation de la requête SQL pour récupérer l'utilisateur par son nom d'utilisateur
        $stmt = $this->db->prepare("SELECT * FROM client WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function verifyPassword($password, $hashedPassword) {
        // Vérification du mot de passe hashé
        return password_verify($password, $hashedPassword);
    }
}

?>
