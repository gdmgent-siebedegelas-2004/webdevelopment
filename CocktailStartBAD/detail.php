<?php

    require_once __DIR__ . '/includes/db.php';

    // id uit de querystring halen
    $q_id = $_GET['cocktail_id'] ?? 0;
    if (!$q_id) {
        header('location:index.php');
    }
    
    // cocktail ophalen uit DB
    $sql = "SELECT * FROM cocktails WHERE id = :q_id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':q_id', $q_id);
    $statement->execute();
    $cocktail = $statement->fetchObject();


    // cocktail ophalen uit DB
    $sql = "SELECT * 
    FROM cocktail_ingredient
    JOIN ingredients 
    ON cocktail_ingredient.`cocktail_id` = ingredients.id
    WHERE cocktail_id = :q_id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':q_id', $q_id);
    $statement->execute();
    $ingredients = $statement->fetchAll(PDO::FETCH_OBJ);

    $sql = 'SELECT * FROM ratings WHERE cocktail_id = :q_id';

$stmnt = $db->prepare($sql);
//execute
$stmnt->bindParam(':q_id', $q_id);
$stmnt->execute();
//fetchall
$reviews = $stmnt->fetchAll(PDO::FETCH_OBJ);
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
    <main>
    <h1><?= $cocktail->name; ?></h1>
    <img src="images/cocktails/<?= $cocktail->photo; ?>">
    <?= $cocktail->description; ?>
    <h2>Ingrediënten</h2>
    <dl>
    <?php foreach ($ingredients as $ingredient) : ?>
        <?php include __DIR__ . "/view/ingredient-item.php"; ?>
    <?php endforeach; ?>
</dl>
   
    <h2>Recept</h2>
    Doe de suiker, limoensap, muntblaadjes en bruiswater in een hoog glas (of cocktailshaker) en kneus met een muddler. Voeg de rum en de ijsblokjes toe en schud goed. Enjoy je mojito!    
    <h2>Reviews</h2>
    <?php
        foreach ($reviews as $review) {
            include __DIR__ . '/includes/review-item.php';
        }
        ?>
    <h3>Plaats een review</h3>
    <form method="POST" action="post_review.php">
        <label>
            <span>Naam</span>
            <input type="text" name="name">
        </label>
        <label for="email">
            <span>E-mail</span>
            <input type="email" name="email">
        </label>
        <label for="review">
            <span>Rating</span>
            <input type="number" min="0" max="5" value="3" name="rating">
        </label>
        <label for="review">
            <span>Review</span>
            <textarea cols="30" rows="10" name="review"></textarea>
        </label>
        <button>Verstuur</button>
        <input type="hidden" name="cocktail_id" value="<?= $cocktail->id; ?>">
    </form>

    </main>
</body>
</html>