<?php
include_once __DIR__ . '/Movie.php';

$ioSonoLeggenda = new Movie('Io sono Leggenda', 'azione', 2007, 'James Lassiter', 4);
$ironMan3 = new Movie('iron man 3', 'azione/fantascienza', 2013, 'Shane Black', 3);
$captainAmerica = new Movie('Captain America: The Winter Soldier', 'azione', 2014, 'Joe Russo', 1);
$doctorStrange = new Movie('Doctor Strange', 'azione', 2016, 'Scott Derrickson', 2);

// var_dump($ioSonoLeggenda, $ironMan3, $captainAmerica, $doctorStrange);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Movie</title>
</head>
<body>
    <div class="container">
        <div class="film-card">
            <!-- title -->
            <h1>
                <?= ' ' . $ioSonoLeggenda->title; ?>
            </h1>
            <ul>
                <li>
                    Genere: 
                    <?= ' ' . $ioSonoLeggenda->genre; ?>
                </li>
                <li>
                    Anno: 
                    <?= ' ' . $ioSonoLeggenda->year; ?>
                </li>
                <li>
                    Regista: 
                    <?= ' ' . $ioSonoLeggenda->director; ?>
                </li>
                <li>
                    Voto:
                    <?= ' ' . $ioSonoLeggenda->rating; ?>
                </li>
            </ul>
        </div>
        <div class="film-card">
            <!-- title -->
            <h1>
                <?= ' ' . $ironMan3->title; ?>
            </h1>
            <ul>
                <li>
                    Genere: 
                    <?= ' ' . $ironMan3->genre; ?>
                </li>
                <li>
                    Anno: 
                    <?= ' ' . $ironMan3->year; ?>
                </li>
                <li>
                    Regista: 
                    <?= ' ' . $ironMan3->director; ?>
                </li>
                <li>
                    Voto:
                    <?= ' ' . $ironMan3->rating; ?>
                </li>
            </ul>
        </div>
        <div class="film-card">
            <!-- title -->
            <h1>
                <?= ' ' . $captainAmerica->title; ?>
            </h1>
            <ul>
                <li>
                    Genere: 
                    <?= ' ' . $captainAmerica->genre; ?>
                </li>
                <li>
                    Anno: 
                    <?= ' ' . $captainAmerica->year; ?>
                </li>
                <li>
                    Regista: 
                    <?= ' ' . $captainAmerica->director; ?>
                </li>
                <li>
                    Voto:
                    <?= ' ' . $captainAmerica->rating; ?>
                </li>
            </ul>
        </div>
        <div class="film-card">
            <!-- title -->
            <h1>
                <?= ' ' . $doctorStrange->title; ?>
            </h1>
            <ul>
                <li>
                    Genere: 
                    <?= ' ' . $doctorStrange->genre; ?>
                </li>
                <li>
                    Anno: 
                    <?= ' ' . $doctorStrange->year; ?>
                </li>
                <li>
                    Regista: 
                    <?= ' ' . $doctorStrange->director; ?>
                </li>
                <li>
                    Voto:
                    <?= ' ' . $doctorStrange->rating; ?>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>