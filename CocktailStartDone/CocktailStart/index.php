<?php 

require_once __DIR__ . '/includes/db.php';

$sql = 'SELECT * FROM cocktails';

$stmnt = $db->prepare($sql);
//execute
$stmnt->execute();
//fetchall
$cocktails = $stmnt->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktails</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <a href="index.php">Cocktails</a>
</header>
<main class="cocktails">
    <?php foreach($cocktails as $cocktail) {
        include __DIR__ . '/includes/cocktail-item.php';
    }
    
    ?>
 </main>
</body>
</html>