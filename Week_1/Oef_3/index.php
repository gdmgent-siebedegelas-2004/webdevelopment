<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1 class="Suv">Oef suvs</h1>
    <?php
    require_once "data.php";

    echo '<div class="cars">';
    foreach ($cars as $item) {
        // print_r($item);
        include "views/car_item.php";
        }
    echo '</div>';
    ?>
</body>
</html> 