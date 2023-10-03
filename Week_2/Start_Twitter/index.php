<?php
    require 'includes/db.php';  

    $sql = 'SELECT * 
            FROM `message` 
            INNER JOIN `users` ON `message`.`user_id` = `users`.`id`
            ORDER BY `created_on` DESC 
            LIMIT 25';

    $sql_statement = $db->prepare($sql);
    $sql_statement->execute();
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
        <form>
            <div class="message message-new">
            
                <div class="avatar">JD</div>

                <div class="content">
                    <textarea name="tweet"></textarea>
                    <button type="submit">Tweet</button>
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