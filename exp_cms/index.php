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
require_once 'includes/db.php';

$sql = "SELECT * FROM pages";
$statement = $db->prepare($sql);
$statement->execute();
$pages = $statement->fetchAll();

echo '<nav>';
foreach ($pages as $page) {
    echo '<a href="index.php?q_id=' . $page['page_id'] . '">' . $page['name'] . '</a>';
}
echo '</nav>';

//ophalen van de huidige pagina
$current_page_id = $_GET['q_id'] ?? 1;

$sql = "SELECT * FROM `pages` WHERE `page_id` = :p_id";

$statement = $db->prepare($sql);
$statement->execute(
    [
        ':p_id' => $current_page_id
    ]
);
$current_page = $statement->fetchObject();

$view = 'views/' . $current_page->template . '.php';

if (! file_exists($view)) {
    $view = 'views/page.php';
} 

include $view;

?>
</div>
</body>
</html>