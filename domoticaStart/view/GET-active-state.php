<?php
require_once __DIR__ . '/includes/db.php';

$status = $GET['status'];

$sql = "SELECT * FROM buttons;";
$stmnt = $db->prepare($sql);
$stmnt->execute();

// if (condition) {
// } else {
// }


header('Location: ' . $_SERVER['HTTP_REFERER']);

// status 1 = aan
// status 0 = uit