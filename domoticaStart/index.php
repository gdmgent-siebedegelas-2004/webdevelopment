<?php





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