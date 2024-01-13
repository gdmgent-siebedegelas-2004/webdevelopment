<?php
    require 'includes/db.php';  

    $search_string = $_GET['search_string'] ?? '';

    $sql = 'SELECT * 
            FROM `message` 
            INNER JOIN `users` ON `message`.`user_id` = `users`.`id`
            WHERE `message` LIKE :search_string
            ORDER BY `created_on` DESC 
            LIMIT 25';

    $sql_statement = $db->prepare($sql);
    $sql_statement->execute(
        [
            ':search_string' => '%' . $search_string . '%'
        ]
    );
    $messages = $sql_statement->fetchAll(); 

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
        <!-- action naar plek add_tweet.php && method op POST -->
        <form action="api/add_tweet.php" method="POST">
            <div class="message message-new">
            
                <div class="avatar">JD</div>

                <div class="content">
                    <textarea name="tweet"></textarea>
                    <button type="submit">Tweet</button>
                </div>
            </div>
        </form>

        ﻿

        <form>
            <div class="search">
                 <div class="content">

                    <input value="<?= $search_string; ?>" name="search_string" placeholder="Zoekterm">
                    <button type="submit">Zoeken</button>
                </div>  
            </div>
        </form>
      <!-- PHP -->
      <?php
      foreach ($messages as $item) {
        include 'views/message.php';
      }
      ?>
    </div>

</div>


</body>
</html>