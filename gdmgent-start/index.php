<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDM.gent cases</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php include_once 'includes/db.php';
    // print_r($db);
        //2. Query schrijven
        $sql = "SELECT * FROM db.projects";

        //3. Query uitvoeren
        $statement = $db->query($sql);

        //4. Resultaat verwerken
        $projects = $statement->fetchAll();

        foreach($projects as $project){
            include 'includes/detail.php';
            // echo $project['title'];
            // echo '<br>';
        }
    ?>

    
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
</div>
</body>
</html>