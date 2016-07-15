<?php

function pageController() {

    $favoriteThings = ['sports', 'pokemon', 'muscle cars', 'women...sometimes'];


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
    <h1 class="text-center" style="color: papayawhip">These are my favorite things</h1>
        <table class="table table-bordered text-center" style="font-size: x-large">
          <thead>
            <tr>
                <th width="15%" style="color:blueviolet; text-align: center">Fav1</th>
                <th width="15%" style="color:blueviolet; text-align: center">Fav2</th>
                <th width="15%" style="color:blueviolet; text-align: center">Fav3</th>
                <th width="15%" style="color:blueviolet; text-align: center">Fav4</th>
            </tr>
          </thead>
          <tbody>
            <tr style="color: papayawhip">
                <?php foreach ($favoriteThings as $thing): ?>
                <td><?= $thing; ?></td>
                <?php endforeach; ?>
            </tr>
          </tbody>
        </table>

    </body>
</html>
