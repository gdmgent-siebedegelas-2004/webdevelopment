<?php 

function getUserByEmail($email){
    global $db;
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmnt = $db->prepare($sql);
    $stmnt->execute([$email]);
    return $stmnt->fetchObject();
}