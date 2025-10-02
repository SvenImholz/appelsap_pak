<?php

$lengte = 190;
$naam = "Frans";
$haar = false;

$frans = [
    "lengte" => $lengte,
    "naam" => $naam,
    "haar" => $haar
];

$sven = [
    "lengte" => 180,
    "naam" => "Sven",
    "haar" => false,
];

$lokaal = [
    $frans,
    $sven,
    [
        "lengte" => 170,
        "naam" => "Marcel",
        "haar" => true,
    ],
    [
        "lengte" => 175,
        "naam" => "Wibo",
        "haar" => false,
    ]
]

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lokaal</title>
</head>
<body>
    <section>
        <h1>Studenten</h1>
        <?php foreach($lokaal as $student): ?>
        <article>
            <h2><?= $student['naam'] ?></h2>
            <p>Is <?= $student['lengte'] ?> cm lang en heeft <?php echo $student['haar'] ? "wel" : "geen" ?> haar.</p>
        </article>
        <?php endforeach ?>
    </section>
</body>
</html>


