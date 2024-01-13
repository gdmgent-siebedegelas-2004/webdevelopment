<h1><?= $current_page->name ?></h1>
<p><?= $current_page->content ?></p>
<div class="projects">
<?php
    $files = scandir('projects/', SCANDIR_SORT_ASCENDING);

    foreach ($files as $item) {
        if( is_file ('projects/' . $item)) {
            echo '<img src="projects/' . $item . '">';
        }
    }
?>
</div>