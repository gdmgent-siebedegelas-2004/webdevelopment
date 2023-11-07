<h1><?= $current_pages->title;?></h1>
    <div class="content">
        <?= $current_pages->content;?>
    </div>
    <div class="projects">
<?php
    $files = scandir('projects/', SCANDIR_SORT_ASCENDING);


    foreach ($files as $item) {
        if ( is_file('projects/' . $item)) {
            echo '<img src ="projects/' . $item . '">';
        }
    }
?>
</div>