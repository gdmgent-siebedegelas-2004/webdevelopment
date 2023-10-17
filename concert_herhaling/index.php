   <?php
    include 'functions/concerts.php';
    include 'partials/header.php';
   ?>
   <h1 class="main-title">Concerten</h1>
    <?php

    // include 'data/concerts.php';
    // print_r($concerts);
    include 'includes/db.php';

    $concerts = getConcerts();

    foreach( $concerts as $key => $item ) {
        include 'views/concert_item.php';
    } 
    include 'partials/footer.php';
    ?>
</body>
</html>
