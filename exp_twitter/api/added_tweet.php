<?php

require  '../includes/db.php';

$tweet = $_POST['tweet'];

$sql = "INSERT INTO `message` (`message`, user_id, created_on) VALUES (:message, :user_id, :created_on)";
$statement = $db->prepare($sql);
$statement->execute([
    ':message' => $tweet,
    ':user_id' => 122,
    ':created_on' => date('Y-m-d H:i:s')
]);

header('location: ../index.php');
exit();