<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each</title>
</head>
<body>
    <h1>Oefening foreach</h1>
    <?php
        $colors = [
            "R" => 'red',
            "B" => 'green', 
            "G" => 'blue'];
        // print_r($colors);
        foreach ($colors as $key => $value) {
            echo '<div style="background: ' . $value . '">' . $key . " = " . $value . '</div>';
        }

        echo $colors["R"];
    ?>
</body>
</html>