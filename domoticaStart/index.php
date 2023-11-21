<?php

require_once __DIR__ . '/includes/db.php';

// categories uit de querystring halen
$sql = "SELECT * FROM categories;";
$stmnt = $db->prepare($sql);
$stmnt->execute();
$categories = $stmnt->fetchAll(PDO::FETCH_OBJ);

// buttons ophalen
$sql = "SELECT * FROM buttons;";
$stmnt = $db->prepare($sql);
$stmnt->execute();
$buttons = $stmnt->fetchAll(PDO::FETCH_OBJ);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeGelas</title>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/fontawsome/css/all.min.css">
</head>
<body>

<div class="roomlist">
    <?php
    foreach ($categories as $roomlist) {
        include __DIR__ . "/view/roomList.php";
    }
    ?>
</div>
<div class="buttonlist">    
    <?php 
    foreach ($buttons as $btn) {
        include __DIR__ . "/view/btn-type.php";
    }
    ?>

</div>
</body>
</html>