<?php

function pageController()
{
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];
    return['count' => $count];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Counting 4 Dayzz</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body style="background-color: firebrick">
        <h1 class="text-center" style="color: ghostwhite; font-size: 50px">Hey!<br>Let's Count Up and Down!</h1>
        <h3 class="text-center" style="color: ghostwhite; font-size: 50px"><?= $count ?></h3>
        <div class ='col-md-12' style="text-align: center; font-size: 44px">
            <a href=" ?count=<?= $count + 1 ?>">+1</a>
            <br>
            <a href=" ?count=<?= $count - 1 ?>">-1</a>
        </div>
    </body>
</html>
