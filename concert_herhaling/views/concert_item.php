<!-- <?php
print_r($item)
?> -->

<div class="concert">
    <h2><?= $item['concert'] ?></h2>
    <p><?= $item['artist'] ?></p>
    <a href="detail.php?q_id=<?= $key; ?>">meer info...</a>
    <hr>
</div>