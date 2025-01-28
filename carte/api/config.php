<?php
$host = "localhost"; // Adresse de la base
$dbname = "sig-sante"; // Nom de la base
$user = "postgres"; // Nom d'utilisateur PostgreSQL
$password = "Mamadou281201"; // Mot de passe PostgreSQL

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gérer les erreurs
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
