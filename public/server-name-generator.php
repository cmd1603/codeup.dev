<?php


function serverNameGenerator()
{
        $adjectives = array('red', 'blue', 'purple', 'yellow', 'pink', 'papayawhip', 'charcoal', 'black', 'grey', 'green');

        $nouns = array('ferrari', 'ford', 'dodge', 'chevy', 'lamborghini', 'porche', 'toyota', 'chrysler', 'mercedes', 'bmw');

    $randomNumber = mt_rand(0, count($nouns) - 1);
    $randomAdj = $adjectives[$randomNumber];
    $randomNoun = $nouns[$randomNumber];
    $serverName = "{$randomAdj} {$randomNoun}";

    return array('serverName'=> $serverName, 'randomNumber'=> $randomNumber, 'colors' => $adjectives);
}

function pageController()
{
    $data = serverNameGenerator();

    return $data;
}

extract(pageController());

?>

<html>
<head>
    <title>You Got Served</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body style="background-color: #18e6b8">
    <h1 style="text-align: center; color: ghostwhite">You Got Surrverddd...</h1>
    <h3 style="text-align: center; color: <?= $colors[$randomNumber];?>"><?= $serverName; ?></h3>
</body>

</html>