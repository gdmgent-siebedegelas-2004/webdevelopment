<?php
$v_id = $_GET['q_id'];

// echo $v_id;

include 'data/concerts.php';

$item = ($concerts[$v_id]);

?>
<h2><?= $item['concert'] ?></h2>
<p>Artiest: <?= $item['artist'] ?></p>
<div>Datum: <?= $item['date'] ?></div>
<div>Locatie: <?= $item['location'] ?></div>
