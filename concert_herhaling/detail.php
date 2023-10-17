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

// print_r($result);
// exit;

// $item = ($concerts[$v_id]);

if ($item) {
    ?>
    <h2><?= $item->title ?></h2>
    <p>Artiest: <?= $item->artist ?></p>
    <div>Datum: <?= $item->date ?></div>
    <div>Locatie: <?= $item->location ?></div> 
<?php
} else {
    echo "Concert not found";
}


include 'partials/footer.php';
?>