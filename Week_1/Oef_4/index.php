<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Oefening 1</h1>
    <h2>Lottotrekking
    </h2>

<?php
// While loop
    $lottotrekking = [];

    while ( count($lottotrekking) < 6 ) { 
        $new = rand(1, 45);
        if (! in_array($new, $lottotrekking)) {
            $lottotrekking[] = $new;
        }
    }

    sort($lottotrekking);
    // REVERSE SORT
    // rsort($lottotrekking); 

?>


<!-- In de div -->
    <div class="trekking">
<?php
    foreach ($lottotrekking as $key => $value) {
        echo '<div class="nummer">' . $value . '</div>';
    }
?>
        <!-- <div class="nummer"> <?= $lottotrekking[0]; ?></div>
        <div class="nummer"><?= $lottotrekking[1]; ?></div>
        <div class="nummer"><?= $lottotrekking[2]; ?></div>
        <div class="nummer"><?= $lottotrekking[3]; ?></div>
        <div class="nummer"><?= $lottotrekking[4]; ?></div>
        <div class="nummer"><?= $lottotrekking[5]; ?></div> -->
    </div>

</body>
</html>