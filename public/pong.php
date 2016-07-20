<?php

require_once 'functions.php';

function pageController()
{
    $count = (inputhas('count')) ? (inputget('count')) : 0 ;
    return ['count' => $count];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ping</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body class="container-fluid" background="img/pong.jpg" style="background-color: black;
      background-repeat: no-repeat; webkit-background-size: cover; moz-background-size: cover; o-background-size: cover; background-size: cover">
    <h1 class="text-center" style="color: whitesmoke;">Pong Counter</h1>
    <h2 class="text-center" style="color: whitesmoke;"><?= $count?></h2>
        <div class="col-md-4 text-center" style="font-size: x-large">
            <a href="ping.php?count=<?= $count + 1 ?>" class="text-center" style="font-size: 50px; text-align: center; color: whitesmoke">HIT </a>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center" style="font-size: x-large">
            <a href="pong.php?count=0" style="font-size: 50px; text-align: center; color: whitesmoke">MISS</a>
        </div>
</body>
</html>
