<?php

function pageViewer() {
    $favoriteThings = ['games', 'tv', 'sports', 'women'];

    $data = [$favoriteThings];

    return $data;
}

extract(pageViewer());

?>

<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <title>My Favs</title>
    </head>
    <body>
    <h1>These are my favorite things</h1>
        <ul>
            <?php foreach ($favoriteThings as $thing): ?>
                <li><?= $thing; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
