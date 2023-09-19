<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regenboog</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
<h1>Oefeningen php</h1>
<div class="rainbow">
<?php
for ( $hue = 1; $hue <= 360; $hue++ ) {
    echo '<div class="block" style="background-color: hsl('. $hue . ', 100%, 50%);">'. $hue . '</div>';
}
?>
</div>


</body>
</html>