<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include 'models/fruits.php';

$apple = new Fruit();
$apple->name = "Apple";
$apple->color = "Red";

print_r($apple);

echo "<br>";
echo $apple->color;


?>


</body>
</html>