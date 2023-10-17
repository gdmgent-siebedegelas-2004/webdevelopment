<?php
    include 'partials/header.php';
?>

<div class="concert">
    <h2><?= $item['title'] ?></h2>
    <p><?= $item['artist'] ?></p>
    <a href="detail.php?q_id=<?= $item['concert_id']; ?>">meer info...</a>
      <hr>
</div>