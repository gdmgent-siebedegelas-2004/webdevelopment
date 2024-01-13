<?php 
$full_name = $message['first_name'] . ' ' . $message['last_name'];

?>
<div class="message">
            <div class="avatar"><img src="https://picsum.photos/id/<?= $message['user_id']; ?>/100/100"></div>
            <div class="content">
                <div class="info"><a href="#"><?= $full_name; ?></a> &bull; @doe &bull; <?= $message['created_on']; ?></div>
                <div class="tweet"><?= $message['message']; ?></div>
            </div>
        </div>