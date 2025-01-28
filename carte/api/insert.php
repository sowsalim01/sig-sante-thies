<?php
require 'conn.php'; // Vérification de l'authentification et des rôles

// Vérifie si l'utilisateur est un administrateur
if (!checkRole('admin')) {
    die("Vous n'avez pas l'autorisation d'insérer des données.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data']; // Données saisies par l'utilisateur

    // Insertion dans la base de données
    $stmt = $pdo->prepare("INSERT INTO your_table (data_column) VALUES (?)");
    $stmt->execute([$data]);

    echo "Données insérées avec succès.";
}
?>
<form method="POST">
    <input type="text" name="data" placeholder="Saisir des données" required>
    <button type="submit">Insérer les données</button>
</form>
