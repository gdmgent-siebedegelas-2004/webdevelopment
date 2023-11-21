<?php
session_start();

require_once __DIR__ . '/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT id, email, password FROM users WHERE email = :email";
    $statement = $db->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Andere head-informatie -->
</head>
<body class="login">
    <form method="POST">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Wachtwoord">
        <button type="submit">Inloggen</button>
    </form>
</body>
</html>
