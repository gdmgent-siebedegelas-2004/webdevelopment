<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
require_once 'includes/db.php';

$v_id = $_GET['id'];

// BERICHT TOEVOEGEN
if (isset($_POST['message'])) {
    // Query schrijven
    $sql = "INSERT INTO message (user_id, team_id, message, created_on)
            VALUES (:user_id, :team_id, :message, NOW() );";
    // Query uitvoeren
    $statement = $db->prepare($sql);
    $statement->bindValue(':user_id', $_SESSION['user']->user_id);
    $statement->bindValue(':team_id', $v_id);
    $statement->bindValue(':message', $_POST['message']);
    $statement->execute();
    // Terug naar chat.php
    header('Location: chat.php?id=' . $v_id);
    exit;
}

// ALLE BERICHTEN OPHALEN
// Query schrijven
$sql = 'SELECT * FROM message
JOIN user ON message.user_id = user.user_id
WHERE team_id = :team_id';

// Query uitvoeren
$statement = $db->prepare($sql);
$statement->bindValue(':team_id', $v_id);
$statement->execute();

// Resultaat opvragen
$messages = $statement->fetchAll(PDO::FETCH_OBJ);

// Het gedeelte waarin de gebruiker wordt ingesteld
$user = $_SESSION['user'];
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
        <a href="index.php" class="brand">&laquo;</a>
        <div class="team">Web Development 1</div>
        <div class="user">
            Hi, <?= $user->firstname ?>
            <div class="initials"><?php echo $user->firstname[0] . $user->lastname[0]; ?></div>
        </div>
    </header>
    <section class="chat">
        <?php
            foreach ($messages as $message) {
                include 'views/chat_item.php';
            }
        ?>
        <form method="POST">
            <div class="inner">
                <input type="text" name="message">
                <input type="submit" value="Send">
            </div>
        </form>
    </section>
    
    <script>
        var scrollingElement = document.body;
        scrollTo(0, scrollingElement.scrollHeight);
    </script>

</body>
</html>
