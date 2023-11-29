<?php

function getCategories() {
// categories uit de querystring halen
$sql = "SELECT * FROM categories;";
$stmnt = $db->prepare($sql);
$stmnt->execute();
return $stmnt->fetchAll(PDO::FETCH_OBJ);
}