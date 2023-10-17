   <?php
    include 'partials/header.php';
   ?>
   <h1 class="main-title">Concerten</h1>
    <?php

    // include 'data/concerts.php';
    // print_r($concerts);
    include 'includes/db.php';

    $sql = "SELECT concerts.*, artists.name AS artist, locations.name as location FROM concerts
    JOIN artists ON concerts.artist_id = artists.artist_id
    JOIN locations ON concerts.location_id = locations.location_id";

    $statement = $db->prepare($sql);
    // bind
    $statement->execute();
    $concerts = $statement->fetchAll();

    foreach( $concerts as $key => $item ) {
        include 'views/concert_item.php';
    } 
    include 'partials/footer.php';
    ?>
</body>
</html>
