<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username']; // Nom d'utilisateur saisi
    $password = $_POST['password']; // Mot de passe saisi

    // Récupérer les informations de l'utilisateur
    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id']; // Stocker l'ID de l'utilisateur dans la session
        header('Location: config.php'); // Rediriger vers le tableau de bord
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
<form method="POST">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Connexion</button>
</form>