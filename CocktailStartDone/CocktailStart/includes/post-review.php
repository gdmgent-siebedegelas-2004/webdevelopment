<?php

require_once 'db.php';

$cocktail_id = $_POST['cocktail_id'];

$sql = 'INSERT INTO ratings (cocktail_id, rating, comment, email, name) VALUES (:cocktail_id, :rating, :review, :email, :name)';

$stmnt = $db->prepare($sql);
//execute
$stmnt->bindvalue(':cocktail_id', $cocktail_id);
$stmnt->bindvalue(':rating', $_POST['rating']);
$stmnt->bindvalue(':review', $_POST['review']);
$stmnt->bindvalue(':email', $_POST['email']);
$stmnt->bindvalue(':name', $_POST['name']);
$stmnt->execute();
//fetchall
$cocktail_ingredients = $stmnt->fetchAll(PDO::FETCH_OBJ);

header('Location: ../detail.php?c_id=' . $cocktail_id);