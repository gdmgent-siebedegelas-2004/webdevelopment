<?php
$full_name = $item['first_name'] . ' ' . $item['last_name'];
$user_name = '@' . str_replace(' ', '_', strtolower($full_name) );
?>

<div class="message">
    <div class="avatar"><img src="https://picsum.photos/id/<?= $item['user_id']; ?>/100/100"></div>
    <div class="content">
        <div class="info"><a href="#"><?= $full_name ?></a> &bull; <?= $user_name ?> &bull;<?= $item['created_on']; ?></div>
        <div class="tweet"><?= $item['message']; ?></div>
    </div>
</div>