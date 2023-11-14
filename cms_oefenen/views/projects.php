<h1><?= $current_page->name; ?></h1>
<p><?= $current_page->content; ?></p>

<?php

$files = scandir('projects/', 1);

foreach ($files as $item) {
    if (is_file('projects/'. $item))
    echo '<img src="projects/' . $item . '">';
}
?>