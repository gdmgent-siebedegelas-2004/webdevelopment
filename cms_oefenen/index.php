<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
    <h1>My website</h1>

<?php

require 'includes/db.php';

$sql = "SELECT `page_id`, `slug`, `name` FROM `pages` ORDER BY `sort_order`;";

$stmnt = $db->prepare($sql);
$stmnt->execute();
$all_pages = $stmnt->fetchAll();

echo '<nav>';
foreach($all_pages as $page) {
echo '<a href="index.php?q_id=' . $page['page_id'] . '">' . $page['name'] . '</a>';
}
echo '</nav>';

// Ophalen vd huidige pagina
$current_page_id = $_GET['q_id'] ?? 1;

$sql = 'SELECT * FROM `pages` WHERE `page_id` = :p_id';

$stmnt = $db->prepare($sql);
$stmnt->execute(
    [ ':p_id' => $current_page_id ]
);
$current_page = $stmnt->fetchObject();

$view = 'views/' . $current_page->template . '.php';

if (!file_exists($view)) {
    $view = 'views/page.php';
}

include $view;

?>



</div>
</body>
</html>