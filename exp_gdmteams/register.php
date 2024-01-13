<?php
require 'app.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'] ?? 'John';
    $lastname = $_POST['lastname'] ?? 'Doe';

    $sql = 'SELECT COUNT(*) AS "total" FROM `user` WHERE `email` = :email';
    $pdo_statement = $db->prepare($sql);
    $pdo_statement->execute([':email' => $email]);
    $total = $pdo_statement->fetchColumn();

    if ($total == 0) {
        $sql = 'INSERT INTO `user` (firstname, lastname, email, password, creation_date) VALUES (:firstname, :lastname, :email, :password, :creation_date);';

        $stmt = $db->prepare($sql);
        $stmt->execute([
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
            ':creation_date' => date("Y-m-d H:i:s"),
        ]);

        $user_id = $db->lastInsertId();
        if ($user_id) {
            $_SESSION['user_id'] = $user_id;
            header('Location: index.php');
            exit;
        } else {
            echo 'Er is iets foutgelopen';
        }
    } else {
        echo 'E-mail bestaat al';
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
        <label>First name <input type="text" name="firstname"></label>
        <label>Last name <input type="text" name="lastname"></label>
        <label>Email <input type="email" name="email" required></label>
        <label>Password <input type="password" name="password" required></label>
        <button type="submit">Register</button>
    </form>
    </section>

</body>
</html>
