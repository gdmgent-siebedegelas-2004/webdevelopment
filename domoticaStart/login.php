<?php
require 'app.php';


if (isset($_POST['login'])) {
    $email = $_POST['login'] ?? '';
    $password = $_POST['pass'] ?? '';

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="assets/main.css">
  </head>
  <body class="login">
    <form method="POST">
        <h1>Login</h1>
        <input type="text" name="login">
        <input type="password" name="pass">
        <button type="submit">Inloggen</button>
    </form>
  </body>
</html>