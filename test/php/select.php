<?php
session_start(); // On démarre une session pour suivre l'utilisateur connecté
require 'config.php'; // On inclut la connexion à la base

// Vérifie si un utilisateur possède un rôle particulier
function checkRole($requiredRole) {
    global $pdo;

    if (!isset($_SESSION['user_id'])) {
        return false; // Pas connecté
    }

    // Récupère le rôle de l'utilisateur dans la base
    $stmt = $pdo->prepare("SELECT r.role_name 
                           FROM users u 
                           JOIN roles r ON u.role_id = r.id 
                           WHERE u.id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $role = $stmt->fetchColumn();

    return $role === $requiredRole; // Retourne vrai si le rôle correspond
}
?>
