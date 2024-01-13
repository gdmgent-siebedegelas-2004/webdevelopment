<?php
require 'app.php';

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password_from_form = $_POST['password'];

    $sql = 'SELECT * FROM `user` WHERE `email` = :email';
    $pdo_statement = $db->prepare($sql);
    $pdo_statement->execute([ ':email' => $email ]);
    $user = $pdo_statement->fetchObject();

    if ($user && password_verify($password_from_form, $user->password)) {
        // Sla het hele user object op in de sessie, niet alleen de ID
        $_SESSION['user'] = $user; 
        header('Location: index.php');
        exit; // Voeg een exit toe na een header redirect.
    } else {
        echo 'E-mail en/of wachtwoord zijn verkeerd';
    }   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php" class="brand">Teams</a>
    </header>
    <section>
        <form method="POST">
            <label>Email <input type="text" name="email"></label>
            <label>Password <input type="password" name="password"></label>
            <button type="submit">Login</button>
        </form>
        Heb je nog geen account? <a href="register.php">Registreer</a>
    </section>
</body>
</html>
