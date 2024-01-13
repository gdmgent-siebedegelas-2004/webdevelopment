<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDM.gent cases</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="projects">
    <div class="project">
        <h2>Project 1</h2>
        <img src="">
        <a href="detail.php">Lees meer ... </a>
    </div>
    <div class="project">
        <h2>Project 2</h2>
        <img src="">
        <a href="detail.php">Lees meer ... </a>
    </div>
    <div class="project">
        <h2>Project 3</h2>
        <img src="">
        <a href="detail.php">Lees meer ... </a>
    </div>
    <?php 
    $db = new PDO('mysql:host=db;dbname=gdmgent', 'root', 'root');

    $sql = "SELECT * FROM projects";

    

    $q = $db->prepare($sql);

    $q->execute();

    ?>
</div>
</body>
</html>