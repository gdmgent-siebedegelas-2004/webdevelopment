<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oefening 5</h1>
    <h2>Festival name generator</h2>


    <?php

    require 'data.php';

    $prefix_cnt = count($prefix);
    $suffix_cnt = count($suffix);

    // dowhile
    do {
        $new_festival = $prefix[rand(0, $prefix_cnt-1)] . $suffix[rand(0, $suffix_cnt-1)];
    } while ( in_array( $new_festival, $unavailable) );
    echo $new_festival;
   
    ?>
</body>
</html>