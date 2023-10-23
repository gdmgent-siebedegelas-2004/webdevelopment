<div class="message <?= ($message->user_id == 7) ? 'my' : '' ?>">
    <div class="name"><?= $message->firstname . ' ' . $message->lastname ?></div>
    <div class="text">
        <?= $message->message ?>
    </div>
    <div class="date"><?= $message->created_on ?></div>
</div>