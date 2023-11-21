<?php
require_once __DIR__ . '/includes/db.php';

$c_id = $_GET['c_id'] ?? 0;

if (!$c_id) {
    header('Location: index.php');
}

$previous_cocktails = [];

array_push($previous_cocktails, $c_id);

setcookie('previous', json_encode($previous_cocktails), time() + 3600);

$sql = 'SELECT * FROM cocktails where id = :c_id';

$stmnt = $db->prepare($sql);
//execute
$stmnt->bindParam(':c_id', $c_id);
$stmnt->execute();
//fetchall
$cocktail = $stmnt->fetchObject();

$sql = 'SELECT * 
FROM cocktail_ingredient
JOIN ingredients ON cocktail_ingredient.ingredient_id = ingredients.id WHERE cocktail_id = :c_id';

$stmnt = $db->prepare($sql);
//execute
$stmnt->bindParam(':c_id', $c_id);
$stmnt->execute();
//fetchall
$cocktail_ingredients = $stmnt->fetchAll(PDO::FETCH_OBJ);



$sql = 'SELECT * FROM ratings WHERE cocktail_id = :c_id';

$stmnt = $db->prepare($sql);
//execute
$stmnt->bindParam(':c_id', $c_id);
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
        <h1>Mojito</h1>
        <img src="images/cocktails/<?= $cocktail->photo ?>">
        <p>
            <?= $cocktail->description ?>
            </h2>
            <h2>Ingr</h2>
        <dl>
            <?php
            foreach ($cocktail_ingredients as $ingredient) {

                include __DIR__ . '/includes/ingredient-item.php';

            }

            ?>
        </dl>
        <h2>Recept</h2>
        <?= $cocktail->recipe ?>
        <h2>Reviews</h2>
        <?php
        foreach ($reviews as $review) {
            include __DIR__ . '/includes/review-item.php';
        }
        ?>
        <h3>Plaats een review</h3>
        <form method="POST" action="./includes/post-review.php">
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
                <textarea name="review" cols="30" rows="10"></textarea>
            </label>
            <input type="hidden" name="cocktail_id" value="<?= $cocktail->id; ?>">
            <button>Verstuur</button>
        </form>
    </main>
</body>

</html>