<?php
include 'functions/concerts.php';
include 'partials/header.php';
$v_id = $_GET['q_id'];

// include 'data/concerts.php';
include 'includes/db.php';

$sql = 'SELECT concerts.*, artists.name AS artist, locations.name as location FROM concerts
JOIN artists ON concerts.artist_id = artists.artist_id
JOIN locations ON concerts.location_id = locations.location_id WHERE concert_id = :temp_id';

$statement = $db->prepare($sql);
$statement->bindValue(':temp_id', $v_id);
$statement->execute();
$item = $statement->fetchObject();


if (!$item) {
    header('location: index.php');
}

if (isset ($POST['review'])) {
    $form_review = $POST['review'];
    $form_name =  $POST['name'] ?? '';
    $form_email = $POST['email'];

    $insert_sql = "INSERT INTO reviews (name, email, description, concert_id)
    VALUES (:temp_name, :temp_email, :temp_review, :concert_id);";
    $statement = $db->prepare($sql);
    $statement->bindValue(':temp_concert_id', $v_id);
    $statement->bindValue(':temp_name', $form_name);
    $statement->bindValue(':temp_email', $form_email);
    $statement->bindValue(':temp_review', $form_review);
    $statement->execute();}
// print_r($result);
// exit;

// $item = ($concerts[$v_id]);

if ($item) {
    ?>
    <h2><?= $item->title ?></h2>
    <p>Artiest: <?= $item->artist ?></p>
    <div>Datum: <?= $item->date ?></div>
    <div>Locatie: <?= $item->location ?></div> 

    <h2>Reviews</h2>
<form method="post" action="">
    <label>Naam
        <input type="text" name="name">
    </label>
    <label>Email
        <input type="email" name="email">
    </label>
    <label for='review'>Jouw review
    <textarea name="review" id='review'></textarea>
    </label>
    <button type='submit'>Voeg je review toe</button>
</form>


<?php
} else {
    echo "Concert not found";
}


include 'partials/footer.php';
?>