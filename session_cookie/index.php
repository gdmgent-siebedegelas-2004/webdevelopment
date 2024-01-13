<?php
session_start();
$person = $_POST['person'] ?? $_SESSION['person'] ?? 'you';


setcookie('person', $person, time() + 60*60*24);
?>


<!DOCTYPE html>
<html>
<body>
    <h1>Hello, <?= $person ?></h1>
<p>Wie ben jij?</p>
 <form method="POST">
<input type="text" name="person" id="name"> 
<input type="submit" value="Submit">

</form>

</body>
</html>