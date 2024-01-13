<?php
require __DIR__ . '/includes/db.php';

$search_string = $_GET['search_string'] ?? '';

$sql = "SELECT * FROM message 
JOIN users on message.user_id = users.id 
WHERE message LIKE :search_string
ORDER BY created_on DESC";
$statement = $db->prepare($sql);
$statement->execute([
    ':search_string' => '%' . $search_string . '%']);
$messages = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGM Tweets</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="messages">
        <form action="api/added_tweet.php" method="POST">
            <div class="message message-new">
            
                <div class="avatar">JD</div>

                <div class="content">
                    <textarea name="tweet"></textarea>
                    <button type="submit">Tweet</button>
                </div>
            </div>
        </form>
        <form>
            <div class="search">
                <div class="content">
                    <input value="<?= $search_string; ?>" name="search_string" placeholder="Zoekterm"></input>
                    <button type="submit">Zoeken</button>
                </div>
            </div>
       <?php
    foreach ($messages as $message) {
       require __DIR__ . '/views/message.php';
    }
       ?>
       
    </div>

</div>


</body>
</html>