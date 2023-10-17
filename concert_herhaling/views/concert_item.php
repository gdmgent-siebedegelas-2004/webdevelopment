<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Concerts</title>
</head>


<?php
// print_r($item)
?> 

<div class="concert">
    <h2><?= $item['title'] ?></h2>
    <p><?= $item['artist'] ?></p>
    <a href="detail.php?q_id=<?= $item['concert_id']; ?>">meer info...</a>
      <hr>
</div>