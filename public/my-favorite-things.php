<?php

function pageController() {

    $favoriteThings = ['games', 'tv', 'sports', 'women'];


        $data = array();

        $data['favoriteThings'] = $favoriteThings;

        return $data;
}

extract(pageController());

?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Favs</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body style="background-color: limegreen">
    <h1 class="text-center">These are my favorite things</h1>
        <table class="table">
          <thead>
            <tr>
                <th style="color:blueviolet">Fav1</th>
                <th style="color:blueviolet">Fav2</th>
                <th style="color:blueviolet">Fav3</th>
                <th style="color:blueviolet">Fav4</th>
            </tr>
          </thead>
          <tbody>
            <tr style="color: antiquewhite">
                <?php foreach ($favoriteThings as $thing): ?>
                <td><?= $thing; ?></td>
                <?php endforeach; ?>
            </tr>
          </tbody>
        </table>

    </body>
</html>
