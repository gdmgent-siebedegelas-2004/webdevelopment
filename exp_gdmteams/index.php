<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit; 
}
// Nu is $user gezet met de sessie informatie
$user = $_SESSION['user'];

require_once 'includes/db.php';

// Query schrijven
$sql = 'SELECT * FROM team';

// Query uitvoeren
$statement = $db->prepare($sql);
$statement->execute();

// Resultaat opvragen
$teams = $statement->fetchAll(PDO::FETCH_OBJ);
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
        <div class="user">
            Hi, Mr
        </div>
    </header>
    <section class="chat_list">
        <!-- for loop -->
        <?php
            foreach ($teams as $team) {
                include 'views/team_item.php';
            }
        ?>

    </section>

</body>
</html>

